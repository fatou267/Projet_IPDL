<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Request\RegistrationRequest;
use App\Entity\Request\RenewalRequest;

/**
 * @ORM\Entity
 * @ORM\Table(name="doctorants")
 */
class Doctorant extends User
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 * 
	 * @var integer
	 */
	private $id;
	/**
	 * @ORM\Column(type="date")
	 * 
	 * @var \DateTime
	 */
	private $birthDate;
	/**
	 * @ORM\Column(type="string")
	 * 
	 * @var string
	 */
	private $birthPlace;
	/**
	 * @ORM\Column(type="string")
	 * 
	 * @var string
	 */
	private $wifeName;
	/**
	 * @ORM\OneToOne(targetEntity="Thesis",mappedBy="doctorant")
	 * 
	 * @var Thesis
	 */
	private $myThesis;
	/**
	 * @ORM\OneToOne(targetEntity="Doctorat",mappedBy="doctorantOwner")
	 * 
	 * @var Doctorat
	 */
	private $myDoctorat;
	/**
	 * @ORM\OneToMany(targetEntity="Diploma",mappedBy="doctorantOwner")
	 *
	 * @var Diploma[] An ArrayCollection of Diploma objects.
	 */
	private $myDiplomas;
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Request\RegistrationRequest",mappedBy="doctorantOwner")
	 * 
	 * @var Doctorat
	 */
	private $myRegistrationRequest;
	/**
	 * @ORM\OneToMany(targetEntity="Diploma",mappedBy="doctorantOwner")
	 *
	 * @var RenewalRequest[] An ArrayCollection of RenewalRequest objects.
	 */
	private $myRenewalRequests;

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
	function getBirthPlace()
	{
		return $this->birthPlace;
	}

	/**
	 * 
	 * @param string $birthPlace 
	 * @return Doctorant
	 */
	function setBirthPlace($birthPlace): self
	{
		$this->birthPlace = $birthPlace;
		return $this;
	}

	/**
	 * 
	 * @return \DateTime
	 */
	function getBirthDate()
	{
		return $this->birthDate;
	}

	/**
	 * 
	 * @param \DateTime $birthDate 
	 * @return Doctorant
	 */
	function setBirthDate($birthDate): self
	{
		$this->birthDate = $birthDate;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	function getWifeName()
	{
		return $this->wifeName;
	}

	/**
	 * 
	 * @param string $wifeName 
	 * @return Doctorant
	 */
	function setWifeName($wifeName): self
	{
		$this->wifeName = $wifeName;
		return $this;
	}

	/**
	 * 
	 * @return Thesis
	 */
	function getMyThesis()
	{
		return $this->myThesis;
	}

	/**
	 * 
	 * @param Thesis $myThesis 
	 * @return Doctorant
	 */
	function setMyThesis($myThesis): self
	{
		$this->myThesis = $myThesis;
		return $this;
	}

	/**
	 * 
	 * @return Doctorat
	 */
	function getMyDoctorat()
	{
		return $this->myDoctorat;
	}

	/**
	 * 
	 * @param Doctorat $myDoctorat 
	 * @return Doctorant
	 */
	function setMyDoctorat($myDoctorat): self
	{
		$this->myDoctorat = $myDoctorat;
		return $this;
	}

	/**
	 * 
	 * @return Diploma[]
	 */
	function getMyDiplomas()
	{
		return $this->myDiplomas;
	}

	/**
	 * 
	 * @param Diploma[] $myDiplomas 
	 */
	function addDiploma(Diploma $myDiplomas)
	{
		$this->myDiplomas[] = $myDiplomas;
	}

	/**
	 * 
	 * @return Doctorat
	 */
	function getMyRegistrationRequest()
	{
		return $this->myRegistrationRequest;
	}

	/**
	 * 
	 * @param Doctorat $myRegistrationRequest 
	 * @return Doctorant
	 */
	function setMyRegistrationRequest($myRegistrationRequest): self
	{
		$this->myRegistrationRequest = $myRegistrationRequest;
		return $this;
	}

	/**
	 * 
	 * @return RenewalRequest[]
	 */
	function getMyRenewalRequests()
	{
		return $this->myRenewalRequests;
	}

	/**
	 * 
	 * @param RenewalRequest[] $myRenewalRequests 
	 */
	function addRenewalRequests($myRenewalRequests)
	{
		$this->myRenewalRequests[] = $myRenewalRequests;
	}
}
