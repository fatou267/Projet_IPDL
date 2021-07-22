<?php
namespace App\Entity\Request;

use Doctrine\ORM\Mapping as ORM;
use App\Traits\RequestTrait;

/**
 * @ORM\ Entity
 * @ORM\Table(name="re_registration_requests")
 */
class ReRegistrationRequest extends Request
{
    use RequestTrait;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    private $studentCard;
    private $registrationCertificate;

	/**
	 * 
	 * @return integer
	 */
	function getId() {
		return $this->id;
	}
	/**
	 * 
	 * @return string
	 */
	function getStudentCard() {
		return $this->studentCard;
	}
	
	/**
	 * 
	 * @param string $studentCard 
	 * @return ReRegistrationRequest
	 */
	function setStudentCard($studentCard): self {
		$this->studentCard = $studentCard;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	function getRegistrationCertificate() {
		return $this->registrationCertificate;
	}
	
	/**
	 * 
	 * @param string $registrationCertificate 
	 * @return ReRegistrationRequest
	 */
	function setRegistrationCertificate($registrationCertificate): self {
		$this->registrationCertificate = $registrationCertificate;
		return $this;
	}
}