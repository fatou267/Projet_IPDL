<?php
namespace App\Entity\Request;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\ Entity
 * @ORM\Table(name="derogation_requests")
 */
class DerogationRequest extends Request
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    private $motivationLetterForDirector;
    private $motivationLetterOfThesisDirector;

    /**
     * 
     * @return integer
     */
    function getId()
    {
        return $this->id;
    }
     
	/**
	 * 
	 * @return string
	 */
	function getMotivationLetterForDirector() {
		return $this->motivationLetterForDirector;
	}
	
	/**
	 * 
	 * @param string $motivationLetterForDirector 
	 * @return DerogationRequest
	 */
	function setMotivationLetterForDirector($motivationLetterForDirector): self {
		$this->motivationLetterForDirector = $motivationLetterForDirector;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	function getMotivationLetterOfThesisDirector() {
		return $this->motivationLetterOfThesisDirector;
	}
	
	/**
	 * 
	 * @param string $motivationLetterOfThesisDirector 
	 * @return DerogationRequest
	 */
	function setMotivationLetterOfThesisDirector($motivationLetterOfThesisDirector): self {
		$this->motivationLetterOfThesisDirector = $motivationLetterOfThesisDirector;
		return $this;
	}
}