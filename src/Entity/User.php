<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\InheritanceType;
use Doctrine\ORM\Mapping\DiscriminatorMap;
use Doctrine\ORM\Mapping\DiscriminatorColumn;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="users")
 * @InheritanceType("JOINED")
 * @DiscriminatorColumn(name="type", type="string")
 * @DiscriminatorMap({"doctorant" = "Doctorant"})
 */
abstract class User
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 */
	private $id;
	/**
	 * @ORM\Column(type="string",unique=true)
	 */
	private $email;
	/**
	 * @ORM\Column(type="string")
	 */
	private $password;
	/**
	 * @ORM\Column(type="string")
	 */
	private $lastname;
	/**
	 * @ORM\Column(type="string")
	 */
	private $firstname;
	/**
	 * @ORM\Column(type="string")
	 */
	private $address;
	/**
	 * @ORM\Column(type="string")
	 */
	private $phoneNumber;
	/**
	 * @ORM\Column(type="json")
	 */
	private $roles = [];

	/**
	 * 
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * 
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * 
	 * @param string $email 
	 * @return User
	 */
	public function setEmail($email): self
	{
		$this->email = $email;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getPassword()
	{
		return $this->password;
	}

	/**
	 * 
	 * @param string $password 
	 * @return User
	 */
	public function setPassword($password): self
	{
		$this->password = $password;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getLastname()
	{
		return $this->lastname;
	}

	/**
	 * 
	 * @param string $lastname 
	 * @return User
	 */
	public function setLastname($lastname): self
	{
		$this->lastname = $lastname;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getFirstname()
	{
		return $this->firstname;
	}

	/**
	 * 
	 * @param string $firstname 
	 * @return User
	 */
	public function setFirstname($firstname): self
	{
		$this->firstname = $firstname;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getAddress()
	{
		return $this->address;
	}

	/**
	 * 
	 * @param string $address 
	 * @return User
	 */
	public function setAddress($address): self
	{
		$this->address = $address;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getPhoneNumber()
	{
		return $this->phoneNumber;
	}

	/**
	 * 
	 * @param string $phoneNumber 
	 * @return User
	 */
	public function setPhoneNumber($phoneNumber): self
	{
		$this->phoneNumber = $phoneNumber;
		return $this;
	}

	/**
	 * @see UserInterface
	 */
	public function getRoles(): array
	{
		$roles = $this->roles;
		// guarantee every user at least has ROLE_USER
		$roles[] = 'ROLE_USER';
		return array_unique($roles);
	}

	public function setRoles(array $roles): self
	{
		$this->roles = $roles;

		return $this;
	}
}
