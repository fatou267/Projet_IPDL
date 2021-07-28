<?php

namespace  App\Controller;

use App\Entity\User;
use App\Entity\Doctorant;
use App\Utilities\StringVerifier;
use App\Repository\UserRepository;

class LoginController
{
    private const ROLE_DOCTORANT = "ROLE_DOCTORANT";

    /**
     * login
     *
     * @return void
     */
    public function login()
    {
        $error = "";
        $email = "";
        if (isset($_COOKIE['email'])) {
            echo "<script>
                 window.history.go(-1);
         </script>";
        }
        if (isset($_POST)) {
            require_once "bootstrap.php";
            $userRepository = $entityManager->getRepository(User::class);
            $email =  isset($_POST['email']) ? StringVerifier::stringEscaping($_POST['email']) : null;
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $user = $userRepository->findOneBy(["email" => $email]);
                $password = isset($_POST['password']) ? StringVerifier::stringEscaping($_POST['password']) : null;

                if ($user != null && $password != null && password_verify($password, $user->getPassword())) {
                    // Connection
                    setcookie('email', $email, time() + 60 * 60 * 12);
                    header('Location: /');
                }
            }
            $error = "Email ou mot de passe incorrect!!";
        }

        require('templates/connection/login.php');
    }

    /**
     * signUp
     *
     * @return void
     */
    public function signUp()
    {
        $error = "";
        if (isset($_POST)) {
            require_once "bootstrap.php";

            $firstname = isset($_POST['firstname']) ? StringVerifier::stringEscaping($_POST['firstname']) : null;
            $lastname = isset($_POST['lastname']) ? StringVerifier::stringEscaping($_POST['lastname']) : null;
            $address =  isset($_POST['address']) ? StringVerifier::stringEscaping($_POST['address']) : null;
            $phoneNumber =  isset($_POST['phoneNumber']) ? StringVerifier::stringEscaping($_POST['phoneNumber']) : null;
            $email =  isset($_POST['email']) ? StringVerifier::stringEscaping($_POST['email']) : null;
            $password = isset($_POST['password']) ? StringVerifier::stringEscaping($_POST['password']) : null;
            $birthPlace = isset($_POST['birthPlace']) ? StringVerifier::stringEscaping($_POST['birthPlace']) : null;

            // TODO: verify the date
            $birthDate = isset($_POST['birthDate']) ? new \DateTime($_POST['birthDate']) : null;

            if ($firstname != null && $lastname != null && $phoneNumber != null && $address != null && filter_var($email, FILTER_VALIDATE_EMAIL) && $password != null && $birthPlace != null && $birthDate != null) {

                $doctorant = new Doctorant();
                $roles = $doctorant->getRoles();
                array_push($roles, $this::ROLE_DOCTORANT);

                $doctorant->setFirstname($firstname)
                    ->setLastname($lastname)
                    ->setEmail($email)
                    ->setAddress($address)
                    ->setPhoneNumber($phoneNumber)
                    ->setRoles($roles);

                $doctorant->setBirthPlace($birthPlace)
                    ->setBirthDate($birthDate);

                $password = password_hash($password, PASSWORD_DEFAULT);
                if (!$password) {
                    throw new \Exception("Hashage impossible du mot de passe");
                }

                $doctorant->setPassword($password);

                $entityManager->persist($doctorant);
                $entityManager->flush();

                header('Location: /login');
            } else {
                $error = "Veuillez remplir tous les champs!!";
            }
        }
        require('templates/connection/signUp.php');
    }

    /**
     * logout
     *
     * @return void
     */
    public function logout()
    {
        setcookie("email", "", time() - 3600);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
