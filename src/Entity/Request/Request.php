<?php

namespace App\Entity\Request;

use App\Entity\Laboratory;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\InheritanceType;
use Doctrine\ORM\Mapping\DiscriminatorMap;
use App\Entity\Request\RegistrationRequest;
use Doctrine\ORM\Mapping\DiscriminatorColumn;

/**
 * @ORM\Entity
 * @ORM\Table(name="requests")
 * @InheritanceType("JOINED")
 * @DiscriminatorColumn(name="type", type="string")
 * @DiscriminatorMap({"registrationRequest" = "RegistrationRequest","derogationRequest"="DerogationRequest","renewalRequest"="RenewalRequest","re_registrationRequest"="ReRegistrationRequest"})
 */
abstract class Request
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
	private $updateAt;
	/**
	 * @ORM\Column(type="string")
	 */
	private $state;
	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\Laboratory",inversedBy="requestsAssociated")
	 *
	 * @var Laboratory
	 */
	private $laboratoryAssociated;

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
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * 
	 * @param string $title 
	 * @return Request
	 */
	public function setTitle($title): self
	{
		$this->title = $title;
		return $this;
	}

	/**
	 * 
	 * @return \DateTime
	 */
	public function getUpdateAt()
	{
		return $this->updateAt;
	}

	/**
	 * 
	 * @param \DateTime $updateAt 
	 * @return Request
	 */
	public function setUpdateAt($updateAt): self
	{
		$this->updateAt = $updateAt;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
	}

	/**
	 * 
	 * @param string $state 
	 * @return Request
	 */
	public function setState($state): self
	{
		$this->state = $state;
		return $this;
	}
	/**
	 * 
	 * @return Laboratory
	 */
	public function getLaboratoryAssociated()
	{
		return $this->laboratoryAssociated;
	}

	/**
	 * 
	 * @param Laboratory $laboratoryAssociated 
	 * @return Request
	 */
	public function setLaboratoryAssociated($laboratoryAssociated): self
	{
		$this->laboratoryAssociated = $laboratoryAssociated;
		return $this;
	}
}
