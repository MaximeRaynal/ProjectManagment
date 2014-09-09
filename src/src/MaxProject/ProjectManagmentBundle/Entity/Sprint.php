<?php

namespace MaxProject\ProjectManagmentBundle\Entity;

class Sprint {

    private $id;

    private $project;

    private $beginDate;

    private $endDate;

    private $nbIteration;

    private $tasks;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tasks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set beginDate
     *
     * @param \DateTime $beginDate
     * @return Sprint
     */
    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;

        return $this;
    }

    /**
     * Get beginDate
     *
     * @return \DateTime 
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Sprint
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set nbIteration
     *
     * @param integer $nbIteration
     * @return Sprint
     */
    public function setNbIteration($nbIteration)
    {
        $this->nbIteration = $nbIteration;

        return $this;
    }

    /**
     * Get nbIteration
     *
     * @return integer 
     */
    public function getNbIteration()
    {
        return $this->nbIteration;
    }

    /**
     * Add tasks
     *
     * @param \MaxProject\ProjectManagmentBundle\Entity\Task $tasks
     * @return Sprint
     */
    public function addTask(\MaxProject\ProjectManagmentBundle\Entity\Task $tasks)
    {
        $this->tasks[] = $tasks;

        return $this;
    }

    /**
     * Remove tasks
     *
     * @param \MaxProject\ProjectManagmentBundle\Entity\Task $tasks
     */
    public function removeTask(\MaxProject\ProjectManagmentBundle\Entity\Task $tasks)
    {
        $this->tasks->removeElement($tasks);
    }

    /**
     * Get tasks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * Set project
     *
     * @param \MaxProject\ProjectManagmentBundle\Entity\Project $project
     * @return Sprint
     */
    public function setProject(\MaxProject\ProjectManagmentBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \MaxProject\ProjectManagmentBundle\Entity\Project 
     */
    public function getProject()
    {
        return $this->project;
    }
}
