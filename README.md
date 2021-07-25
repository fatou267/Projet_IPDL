# Système de gestion de l'EDMI

### `Prerequisites`

   Install [Composer](https://getcomposer.org/download/)<br>
   Use `composer update` to install the following dependencies:
   - **Doctrine ORM** for database mapping
  

#### Doctrine

    When create an entity be sure to add all required annotations.
    For example:

        <?php
        namespace App\Entity;

        use Doctrine\ORM\Mapping as ORM;

        /**
        *@ORM\Entity
        *@ORM\Table(name="foo")
        */
        class foo
        {
            
            /**
             * @ORM\Id
             * @ORM\Column(type="integer")
             * @ORM\GeneratedValue
             */
            private $id;
            /**
            *@ORM\Column(type="string")
            */
            private attribute1;

            ...

        }
##### Use of the entityManager

Save new entity (insert and update)

    public function signUp()
    {
            require_once "bootstrap.php"; // the file containing the $entityManager variable
            .... some codes
                
            $entityManager->persist($user); // when updating the persist is useless
            $entityManager->flush();
            }
        }
        require('templates/connection/signUp.php');
    }
    
Select 

     $dql = "SELECT b, e, r FROM Bug b JOIN b.engineer e JOIN b.reporter r ".
       "WHERE b.status = 'OPEN' AND (e.id = ?1 OR r.id = ?1) ORDER BY b.created DESC";

    $myBugs = $entityManager->createQuery($dql)
                        ->setParameter(1, $theUserId)
                        ->setMaxResults(15)
                        ->getResult();

<br>

<i>For these such of requests, it's better to use the repository.
First create the repository for the entity (ex: `UserRepository`), which will extends the EntityRepository class and just put your request in a function like this :</i>

    public function getAllBugs(){
        return $entityManager->createQuery($dql)
                        ->setParameter(1, $theUserId)
                        ->setMaxResults(15)
                        ->getResult();
                     
Remove entity

    $entityManager->remove($user);
    
### Architecture

   For this project, we use MVC pattern to strucutre our code.
   So we have the following folders and files: 
   
         - Controller : for all controllers
         - Entity : for all model entities
         - Repository : for model (database requests)
         - index.php : the router
