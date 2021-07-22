<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="doctorants")
 */
class Doctorant extends User
{	

    
    /**
     * @ORM\Column(type="string")
     */
    private $birthPlace;
    /**
     * @ORM\Column(type="string")
     */
    private $wifeName;
    
	/**
	 * 
	 * @return string
	 */
	function getBirthPlace() {
		return $this->birthPlace;
	}
	
	/**
	 * 
	 * @param string $birthPlace 
	 * @return Doctorant
	 */
	function setBirthPlace($birthPlace): self {
		$this->birthPlace = $birthPlace;
		return $this;
	}
	
	/**
	 * 
	 * @return \DateTime
	 */
	function getBirthDate() {
		return $this->birthDate;
	}
	
	/**
	 * 
	 * @param \DateTime $birthDate 
	 * @return Doctorant
	 */
	function setBirthDate($birthDate): self {
		$this->birthDate = $birthDate;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	function getWifeName() {
		return $this->wifeName;
	}
	
	/**
	 * 
	 * @param string $wifeName 
	 * @return Doctorant
	 */
	function setWifeName($wifeName): self {
		$this->wifeName = $wifeName;
		return $this;
	}
}