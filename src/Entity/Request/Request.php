<?php
namespace App\Entity\Request;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="requests")
 */
class Request
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
	 * @return Request
	 */
	public function setTitle($title): self {
		$this->title = $title;
		return $this;
	}
	
	/**
	 * 
	 * @return \DateTime
	 */
	public function getUpdateAt() {
		return $this->updateAt;
	}
	
	/**
	 * 
	 * @param \DateTime $updateAt 
	 * @return Request
	 */
	public function setUpdateAt($updateAt): self {
		$this->updateAt = $updateAt;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getState() {
		return $this->state;
	}
	
	/**
	 * 
	 * @param string $state 
	 * @return Request
	 */
	public function setState($state): self {
		$this->state = $state;
		return $this;
	}
}