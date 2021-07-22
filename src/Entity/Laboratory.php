<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="laboratories")
 */
class Laboratory
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    private $name;
    private $address;
    private $email;
    
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
	function getName() {
		return $this->name;
	}
	
	/**
	 * 
	 * @param string $name 
	 * @return Laboratory
	 */
	function setName($name): self {
		$this->name = $name;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	function getAddress() {
		return $this->address;
	}
	
	/**
	 * 
	 * @param string $address 
	 * @return Laboratory
	 */
	function setAddress($address): self {
		$this->address = $address;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	function getEmail() {
		return $this->email;
	}
	
	/**
	 * 
	 * @param string $email 
	 * @return Laboratory
	 */
	function setEmail($email): self {
		$this->email = $email;
		return $this;
	}
}