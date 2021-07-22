<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="theses")
 */
class Thesis
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
	private $subject;
	/**
	 * @ORM\Column(type="text")
	 */
	private $content;
	/**
	 * @ORM\OneToOne(targetEntity="Doctorant",inversedBy="myThesis")
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
	public function getSubject()
	{
		return $this->subject;
	}

	/**
	 * 
	 * @param string $subject 
	 * @return Thesis
	 */
	public function setSubject($subject): self
	{
		$this->subject = $subject;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getContent()
	{
		return $this->content;
	}

	/**
	 * 
	 * @param string $content 
	 * @return Thesis
	 */
	public function setContent($content): self
	{
		$this->content = $content;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getDoctorantOwner()
	{
		return $this->doctorantOwner;
	}

	/**
	 * 
	 * @param mixed $doctorantOwner 
	 * @return Thesis
	 */
	function setDoctorantOwner($doctorantOwner): self
	{
		$this->doctorantOwner = $doctorantOwner;
		return $this;
	}
}
