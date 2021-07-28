<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="doctorats")
 */
class Doctorat
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
	 * @ORM\Column(type="string")
	 */
	private $attachedInstitution;
	/**
	 * @ORM\Column(type="string")
	 */
	public const DOCTORAL_SCHOOL = "Ecole Doctorale de Mathematiques et Informatique";
	/**
	 * @ORM\ManyToOne(targetEntity="Doctorant",inversedBy="myDoctorat")
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
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * 
	 * @param string $title 
	 * @return Doctorat
	 */
	public function setTitle($title): self
	{
		$this->title = $title;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getAttachedInstitution()
	{
		return $this->attachedInstitution;
	}
	/**
	 * 
	 * @param mixed $attachedInstitution 
	 * @return Doctorat
	 */
	function setAttachedInstitution($attachedInstitution): self {
		$this->attachedInstitution = $attachedInstitution;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getDoctorantOwner() {
		return $this->doctorantOwner;
	}
	
	/**
	 * 
	 * @param mixed $doctorantOwner 
	 * @return Doctorat
	 */
	function setDoctorantOwner($doctorantOwner): self {
		$this->doctorantOwner = $doctorantOwner;
		return $this;
	}
}
