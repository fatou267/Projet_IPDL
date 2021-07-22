<?php

namespace App\Traits;

use App\Entity\Request\Request;

trait RequestTrait
{
    /**
     * @ORM\Column(type="string")
     */
    private $partnerInstitutionName;
    /**
     * @ORM\Column(type="string")
     */
    private $partnerInstitutionAddress;
    /**
     * @ORM\Column(type="string")
     */
    private $partnerResponsibleName;
    /**
     * @ORM\Column(type="string")
     */
    private $partenerThesisDirectorName;
    /**
     * @ORM\Column(type="string")
     */
    private $partenerThesisDirectorDegree;
    /**
     * @ORM\Column(type="string")
     */
    private $cotutelleAgreement;


    /**
     * 
     * @return string
     */
    public function getPartnerInstitutionName()
    {
        return $this->partnerInstitutionName;
    }

    /**
     * 
     * @param string $partnerInstitutionName 
     * @return Request
     */
    public function setPartnerInstitutionName($partnerInstitutionName): self
    {
        $this->partnerInstitutionName = $partnerInstitutionName;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getPartnerInstitutionAddress()
    {
        return $this->partnerInstitutionAddress;
    }

    /**
     * 
     * @param string $partnerInstitutionAddress 
     * @return Request
     */
    public function setPartnerInstitutionAddress($partnerInstitutionAddress): self
    {
        $this->partnerInstitutionAddress = $partnerInstitutionAddress;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getPartnerResponsibleName()
    {
        return $this->partnerResponsibleName;
    }

    /**
     * 
     * @param string $partnerResponsibleName 
     * @return Request
     */
    public function setPartnerResponsibleName($partnerResponsibleName): self
    {
        $this->partnerResponsibleName = $partnerResponsibleName;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getPartenerThesisDirectorName()
    {
        return $this->partenerThesisDirectorName;
    }

    /**
     * 
     * @param string $partenerThesisDirectorName 
     * @return Request
     */
    public function setPartenerThesisDirectorName($partenerThesisDirectorName): self
    {
        $this->partenerThesisDirectorName = $partenerThesisDirectorName;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getPartenerThesisDirectorDegree()
    {
        return $this->partenerThesisDirectorDegree;
    }

    /**
     * 
     * @param string $partenerThesisDirectorDegree 
     * @return Request
     */
    public function setPartenerThesisDirectorDegree($partenerThesisDirectorDegree): self
    {
        $this->partenerThesisDirectorDegree = $partenerThesisDirectorDegree;
        return $this;
    }

    /**
	 * 
	 * @return string
	 */
	public function getCotutelleAgreement() {
		return $this->cotutelleAgreement;
	}
	
	/**
	 * 
	 * @param string $cotutelleAgreement 
	 * @return Request
	 */
	public function setCotutelleAgreement($cotutelleAgreement): self {
		$this->cotutelleAgreement = $cotutelleAgreement;
		return $this;
	}
}
