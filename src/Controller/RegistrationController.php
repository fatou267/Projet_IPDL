<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Thesis;
use App\Entity\Diploma;
use App\Entity\Doctorat;
use App\Entity\Doctorant;
use App\Entity\Laboratory;
use App\Utilities\StringVerifier;
use App\Entity\Request\RegistrationRequest;
use App\Enums\StateEnum;

class RegistrationController
{
    private const REGISTRATION_TITLE = "Admission";

    public function register($request)
    {
        require_once('bootstrap.php');
        $doctoratSchool = Doctorat::DOCTORAL_SCHOOL;
        $doctorant = $entityManager->getRepository(Doctorant::class)->findOneBy(['email' => $_COOKIE['email']]);

        if (!empty($request)) {


            $registrationRequest = new RegistrationRequest();
            $registrationRequest->setDoctorantOwner($doctorant);

            $diploma = new Diploma();
            $doctorat = new Doctorat();
            $laboratory = new Laboratory();

            $thesis = new Thesis();
            $thesis->setDoctorantOwner($doctorant);

            if (!empty($request['identification'])) {
                foreach ($request['identification'] as $value) {
                    if (($value = StringVerifier::stringEscaping($value)) == "") {
                        throw new \Exception('Veuillez entrer une valeur!!!');
                    }
                }

                $doctorant->setWifeName($request['identification']['wifename']);
            }
            if (!empty($request['cursus'])) {
                foreach ($request['cursus'] as $value) {
                    if (($value = StringVerifier::stringEscaping($value)) == "") {
                        throw new \Exception('Veuillez entrer une valeur!!!');
                    }
                }

                $diploma->setTitle($request['cursus']['diplomaTitle'])
                    ->setDateObtained(new \DateTime($request['cursus']['diplomaDate']))
                    ->setCountry($request['cursus']['diplomaCountry'])
                    ->setTown($request['cursus']['diplomaTown'])
                    ->setIntitutions($request['cursus']['diplomaInstitution'])
                    ->setMention($request['cursus']['mention']);

                $diploma->setDoctorantOwner($doctorant);

                $registrationRequest->setTitle($this::REGISTRATION_TITLE);
                $registrationRequest->setSpeciality($request['cursus']['speciality']);
            }
            if (!empty($request['doctorat'])) {
                foreach ($request['doctorat'] as $value) {
                    if (($value = StringVerifier::stringEscaping($value)) == "") {
                        throw new \Exception('Veuillez entrer une valeur!!!');
                    }
                }

                $doctorat->setTitle($request['doctorat']['doctoratTitle'])
                    ->setAttachedInstitution($request['doctorat']['attachedInstitution'])
                    ->setDoctorantOwner($doctorant);

                $laboratory->setName($request['doctorat']['laboratoryName'])
                    ->setAddress($request['doctorat']['laboratoryAddress'])
                    ->setEmail($request['doctorat']['laboratoryEmail']);

                $thesis->setSubject($request['doctorat']['thesisSubject']);
            }
            if (!empty($request['cotutelle'])) {
                foreach ($request['cotutelle'] as $value) {
                    if (($value = StringVerifier::stringEscaping($value)) == "") {
                        throw new \Exception('Veuillez entrer une valeur!!!');
                    }
                }

                $registrationRequest->setPartnerInstitutionName($request['cotutelle']['partnerInstitutionName'])
                    ->setPartnerInstitutionAddress($request['cotutelle']['partnerInstitutionAddress'])
                    ->setPartnerResponsibleName($request['cotutelle']['partnerResponsibleName'])
                    ->setPartenerThesisDirectorName($request['cotutelle']['partenerThesisDirectorName'])
                    ->setPartenerThesisDirectorDegree($request['cotutelle']['partenerThesisDirectorDegree'])
                    ->setCotutelleAgreement($request['cotutelle']['cotutelleAgreement']);
            }
            if (!empty($request['complement'])) {
                foreach ($request['complement'] as $value) {
                    if (($value = StringVerifier::stringEscaping($value)) == "") {
                        throw new \Exception('Veuillez entrer une valeur!!!');
                    }
                }

                $registrationRequest->setThesisCharter($request['complement']['thesisCharter'])
                    ->setGrantCertificate($request['complement']['grantCertificate'])
                    ->setCvFileName($request['complement']['cv']);
            }

            if (
                !empty($request['identification']) &&
                !empty($request['cursus']) &&
                !empty($request['doctorat']) &&
                !empty($request['cotutelle']) &&
                !empty($request['complement'])
            ) {


                $registrationRequest->setLaboratoryAssociated($laboratory)
                    ->setUpdateAt(new \DateTime)
                    ->setState(StateEnum::STATE_ON_GOING);

                $thesis->setDoctorantOwner($doctorant);

                $entityManager->persist($doctorant);
                $entityManager->persist($doctorat);
                $entityManager->persist($diploma);
                $entityManager->persist($laboratory);
                $entityManager->persist($registrationRequest);
                $entityManager->persist($thesis);

                $entityManager->flush();

                header('Location: /');
            }
        }
        require('templates/registration/register.php');
    }
}
