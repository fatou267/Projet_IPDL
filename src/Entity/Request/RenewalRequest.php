<?php

namespace App\Entity\Request;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Doctorant;

/**
 * @ORM\Entity
 * @ORM\Table(name="renewal_requests")
 */
class RenewalRequest extends Request
{

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
	 * @ORM\Column(type="string",length="4")
	 */
	private $firstYearRegistration;
	/**
	 * @ORM\Column(type="integer")
	 */
	private $numberOfRegistration;
	/**
	 * @ORM\Column(type="string")
	 */
	private $thesisDirectorName;
	/**
	 * @ORM\Column(type="string")
	 */
	private $thesisDirectorDegree;
	/**
	 * @ORM\Column(type="string")
	 */
	private $thesisCoDirectorName;
	/**
	 * @ORM\Column(type="string")
	 */
	private $thesisCoDirectorDegree;
	/**
	 * @ORM\Column(type="string")
	 */
	private $thesisProgress;
	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\Doctorant",inversedBy="myDiplomas")
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
	 * @return integer
	 */
	public function getFirstYearRegistration()
	{
		return $this->firstYearRegistration;
	}

	/**
	 * 
	 * @param integer $firstYearRegistration 
	 * @return RenewalRequest
	 */
	public function setFirstYearRegistration($firstYearRegistration): self
	{
		$this->firstYearRegistration = $firstYearRegistration;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getNumberOfRegistration()
	{
		return $this->numberOfRegistration;
	}

	/**
	 * 
	 * @param string $numberOfRegistration 
	 * @return RenewalRequest
	 */
	public function setNumberOfRegistration($numberOfRegistration): self
	{
		$this->numberOfRegistration = $numberOfRegistration;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getThesisDirectorName()
	{
		return $this->thesisDirectorName;
	}

	/**
	 * 
	 * @param string $thesisDirectorName 
	 * @return RenewalRequest
	 */
	public function setThesisDirectorName($thesisDirectorName): self
	{
		$this->thesisDirectorName = $thesisDirectorName;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getThesisDirectorDegree()
	{
		return $this->thesisDirectorDegree;
	}

	/**
	 * 
	 * @param string $thesisDirectorDegree 
	 * @return RenewalRequest
	 */
	public function setThesisDirectorDegree($thesisDirectorDegree): self
	{
		$this->thesisDirectorDegree = $thesisDirectorDegree;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getThesisCoDirectorName()
	{
		return $this->thesisCoDirectorName;
	}

	/**
	 * 
	 * @param string $thesisCoDirectorName 
	 * @return RenewalRequest
	 */
	public function setThesisCoDirectorName($thesisCoDirectorName): self
	{
		$this->thesisCoDirectorName = $thesisCoDirectorName;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getThesisCoDirectorDegree()
	{
		return $this->thesisCoDirectorDegree;
	}

	/**
	 * 
	 * @param string $thesisCoDirectorDegree 
	 * @return RenewalRequest
	 */
	public function setThesisCoDirectorDegree($thesisCoDirectorDegree): self
	{
		$this->thesisCoDirectorDegree = $thesisCoDirectorDegree;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getThesisProgress()
	{
		return $this->thesisProgress;
	}

	/**
	 * 
	 * @param string $thesisProgress 
	 * @return RenewalRequest
	 */
	public function setThesisProgress($thesisProgress): self
	{
		$this->thesisProgress = $thesisProgress;
		return $this;
	}

	/**
	 * 
	 * @return Doctorant
	 */
	public function getDoctorantOwner()
	{
		return $this->doctorantOwner;
	}

	/**
	 * 
	 * @param Doctorant $doctorantOwner 
	 * @return RenewalRequest
	 */
	public function setDoctorantOwner($doctorantOwner): self
	{
		$this->doctorantOwner = $doctorantOwner;
		return $this;
	}
}
