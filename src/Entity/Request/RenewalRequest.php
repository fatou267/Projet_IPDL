<?php

namespace App\Entity\Request;

use Doctrine\ORM\Mapping as ORM;

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
     * 
     * @return integer
     */
    function getId()
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
	function getFirstYearRegistration() {
		return $this->firstYearRegistration;
	}
	
	/**
	 * 
	 * @param integer $firstYearRegistration 
	 * @return RenewalRequest
	 */
	function setFirstYearRegistration($firstYearRegistration): self {
		$this->firstYearRegistration = $firstYearRegistration;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	function getNumberOfRegistration() {
		return $this->numberOfRegistration;
	}
	
	/**
	 * 
	 * @param string $numberOfRegistration 
	 * @return RenewalRequest
	 */
	function setNumberOfRegistration($numberOfRegistration): self {
		$this->numberOfRegistration = $numberOfRegistration;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	function getThesisDirectorName() {
		return $this->thesisDirectorName;
	}
	
	/**
	 * 
	 * @param string $thesisDirectorName 
	 * @return RenewalRequest
	 */
	function setThesisDirectorName($thesisDirectorName): self {
		$this->thesisDirectorName = $thesisDirectorName;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	function getThesisDirectorDegree() {
		return $this->thesisDirectorDegree;
	}
	
	/**
	 * 
	 * @param string $thesisDirectorDegree 
	 * @return RenewalRequest
	 */
	function setThesisDirectorDegree($thesisDirectorDegree): self {
		$this->thesisDirectorDegree = $thesisDirectorDegree;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	function getThesisCoDirectorName() {
		return $this->thesisCoDirectorName;
	}
	
	/**
	 * 
	 * @param string $thesisCoDirectorName 
	 * @return RenewalRequest
	 */
	function setThesisCoDirectorName($thesisCoDirectorName): self {
		$this->thesisCoDirectorName = $thesisCoDirectorName;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	function getThesisCoDirectorDegree() {
		return $this->thesisCoDirectorDegree;
	}
	
	/**
	 * 
	 * @param string $thesisCoDirectorDegree 
	 * @return RenewalRequest
	 */
	function setThesisCoDirectorDegree($thesisCoDirectorDegree): self {
		$this->thesisCoDirectorDegree = $thesisCoDirectorDegree;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	function getThesisProgress() {
		return $this->thesisProgress;
	}
	
	/**
	 * 
	 * @param string $thesisProgress 
	 * @return RenewalRequest
	 */
	function setThesisProgress($thesisProgress): self {
		$this->thesisProgress = $thesisProgress;
		return $this;
	}
}
