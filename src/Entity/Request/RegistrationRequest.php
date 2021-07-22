<?php

namespace App\Entity\Request;

use Doctrine\ORM\Mapping as ORM;
use App\Traits\RequestTrait;

/**
 * @ORM\Entity
 * @ORM\Table(name="registration_requests")
 */
class RegistrationRequest extends Request
{
	use RequestTrait;

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 */
	private $id;
	/**
	 * @ORM\Column(type="string")
	 */
	private $cvFileName;
	/**
	 * @ORM\Column(type="string")
	 */
	private $speciality;
	/**
	 * @ORM\Column(type="string")
	 */
	private $grantCertificate;
	/**
	 * @ORM\Column(type="string")
	 */
	private $thesisCharter;
	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\Doctorant",inversedBy="myRegistrationRequest")
	 */
	private $doctorantOwner;

	/**
	 * 
	 * @return integer
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * 
	 * @return string
	 */
	public function getCvFileName()
	{
		return $this->cvFileName;
	}

	/**
	 * 
	 * @param string $cvFileName 
	 * @return RegistrationRequest
	 */
	public function setCvFileName($cvFileName): self
	{
		$this->cvFileName = $cvFileName;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getSpeciality()
	{
		return $this->speciality;
	}

	/**
	 * 
	 * @param string $speciality 
	 * @return RegistrationRequest
	 */
	public function setSpeciality($speciality): self
	{
		$this->speciality = $speciality;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getGrantCertificate()
	{
		return $this->grantCertificate;
	}

	/**
	 * 
	 * @param string $grantCertificate 
	 * @return RegistrationRequest
	 */
	public function setGrantCertificate($grantCertificate): self
	{
		$this->grantCertificate = $grantCertificate;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getThesisCharter()
	{
		return $this->thesisCharter;
	}

	/**
	 * 
	 * @param string $thesisCharter 
	 * @return RegistrationRequest
	 */
	public function setThesisCharter($thesisCharter): self
	{
		$this->thesisCharter = $thesisCharter;
		return $this;
	}
}
