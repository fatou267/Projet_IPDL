<?php

namespace App\Entity;

use App\Entity\Request\Request;
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
	/**
	 * @ORM\Column(type="string")
	 */
	private $name;
	/**
	 * @ORM\Column(type="string")
	 */
	private $address;
	/**
	 * @ORM\Column(type="string")
	 */
	private $email;
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Request\Request", mappedBy="laboratoryAssociated")
	 * 
	 * @var Request[]
	 */
	private $requestsAssociated;

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
	public function getName()
	{
		return $this->name;
	}

	/**
	 * 
	 * @param string $name 
	 * @return Laboratory
	 */
	public function setName($name): self
	{
		$this->name = $name;
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
	 * @return Laboratory
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
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * 
	 * @param string $email 
	 * @return Laboratory
	 */
	public function setEmail($email): self
	{
		$this->email = $email;
		return $this;
	}
	/**
	 * 
	 * @return Request[]
	 */
	public function getRequestsAssociated()
	{
		return $this->requestsAssociated;
	}

	/**
	 * 
	 * @param Request[] $requestsAssociated 
	 * @return Laboratory
	 */
	public function setRequestsAssociated($requestsAssociated): self
	{
		$this->requestsAssociated = $requestsAssociated;
		return $this;
	}
}
