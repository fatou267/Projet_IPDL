<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="diplomas")
 */
class Diploma
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
    private $title;
    /**
     * @ORM\Column(type="date")
     */
    private $dateObtained;
    /**
     * @ORM\Column(type="string")
     */
    private $country;
    /**
     * @ORM\Column(type="string")
     */
    private $town;
    /**
     * @ORM\Column(type="string")
     */
    private $intitutions;
    /**
     * @ORM\Column(type="float")
     */
    private $average;
    /**
     * @ORM\Column(type="string")
     */
    private $mention;
    
	/**
	 * 
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}

	
	/**
	 * 
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}
	
	/**
	 * 
	 * @param string $title 
	 * @return Diploma
	 */
	public function setTitle($title): self {
		$this->title = $title;
		return $this;
	}
	
	/**
	 * 
	 * @return \Datetime
	 */
	public function getDateObtained() {
		return $this->dateObtained;
	}
	
	/**
	 * 
	 * @param \Datetime $dateObtained 
	 * @return Diploma
	 */
	public function setDateObtained($dateObtained): self {
		$this->dateObtained = $dateObtained;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getCountry() {
		return $this->country;
	}
	
	/**
	 * 
	 * @param string $country 
	 * @return Diploma
	 */
	public function setCountry($country): self {
		$this->country = $country;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getTown() {
		return $this->town;
	}
	
	/**
	 * 
	 * @param string $town 
	 * @return Diploma
	 */
	public function setTown($town): self {
		$this->town = $town;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getIntitutions() {
		return $this->intitutions;
	}
	
	/**
	 * 
	 * @param string $intitutions 
	 * @return Diploma
	 */
	public function setIntitutions($intitutions): self {
		$this->intitutions = $intitutions;
		return $this;
	}
	
	/**
	 * 
	 * @return float
	 */
	public function getAverage() {
		return $this->average;
	}
	
	/**
	 * 
	 * @param float $average 
	 * @return Diploma
	 */
	public function setAverage($average): self {
		$this->average = $average;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getMention() {
		return $this->mention;
	}
	
	/**
	 * 
	 * @param string $mention 
	 * @return Diploma
	 */
	public function setMention($mention): self {
		$this->mention = $mention;
		return $this;
	}
}