<?php

namespace Jrowlandsnz\TodoApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Task
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var integer
     *
	 * @ORM\ManyToOne(targetEntity="Project")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")  
     */
    private $project;
	
	/**
     * @var datetime
     *
     * @ORM\Column(name="when_due", type="datetime",)
     */
    private $whenDue;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }	

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Task
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Task
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set project
     *
     * @param integer $project
     *
     * @return Task
     */
    public function setProject($project)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return integer
     */
    public function getProject()
    {
        return $this->project;
    }
	
	public function foo() {
		return $this->project;	
	
	}

    /**
     * Set whenDue
     *
     * @param \DateTime $whenDue
     *
     * @return Task
     */
    public function setWhenDue($whenDue)
    {
        $this->whenDue = $whenDue;

        return $this;
    }

    /**
     * Get whenDue
     *
     * @return \DateTime
     */
    public function getWhenDue()
    {
        return $this->whenDue;
    }
}
