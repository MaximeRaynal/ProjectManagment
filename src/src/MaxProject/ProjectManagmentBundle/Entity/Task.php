<?php

namespace MaxProject\ProjectManagmentBundle\Entity;

abstract class AvancmentState {
    const TODO = "TODO";
    const DOING = "DOING";
    const TESTING = "TESTING";
    const DONE = "DONE";
    const ABORT = "ABORT";
}

class Task {

    private $id;

    private $shortName;

    private $name;

    private $description;

    private $axe;

    private $difficulty;

    private $labels;

    private $dueDate;

    private $state;

    private $attachments;

    private $associateMembers;

    private $project;

    private $parentTask;

    private $subTask;

    public function __construct() {

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
     * Set shortName
     *
     * @param string $shortName
     * @return Task
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Get shortName
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Set name
     *
     * @param string $name
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
     * Set axe
     *
     * @param string $axe
     * @return Task
     */
    public function setAxe($axe)
    {
        $this->axe = $axe;

        return $this;
    }

    /**
     * Get axe
     *
     * @return string
     */
    public function getAxe()
    {
        return $this->axe;
    }

    /**
     * Set difficulty
     *
     * @param integer $difficulty
     * @return Task
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    /**
     * Get difficulty
     *
     * @return integer
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Set labels
     *
     * @param array $labels
     * @return Task
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Get labels
     *
     * @return array
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     * @return Task
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Task
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Add attachments
     *
     * @param \MaxProject\ProjectManagmentBundle\Entity\Attachment $attachments
     * @return Task
     */
    public function addAttachment(\MaxProject\ProjectManagmentBundle\Entity\Attachment $attachments)
    {
        $this->attachments[] = $attachments;

        return $this;
    }

    /**
     * Remove attachments
     *
     * @param \MaxProject\ProjectManagmentBundle\Entity\Attachment $attachments
     */
    public function removeAttachment(\MaxProject\ProjectManagmentBundle\Entity\Attachment $attachments)
    {
        $this->attachments->removeElement($attachments);
    }

    /**
     * Get attachments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * Add associateMembers
     *
     * @param \MaxProject\ProjectManagmentBundle\Entity\User $associateMembers
     * @return Task
     */
    public function addAssociateMember(\MaxProject\ProjectManagmentBundle\Entity\User $associateMembers)
    {
        $this->associateMembers[] = $associateMembers;

        return $this;
    }

    /**
     * Remove associateMembers
     *
     * @param \MaxProject\ProjectManagmentBundle\Entity\User $associateMembers
     */
    public function removeAssociateMember(\MaxProject\ProjectManagmentBundle\Entity\User $associateMembers)
    {
        $this->associateMembers->removeElement($associateMembers);
    }

    /**
     * Get associateMembers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAssociateMembers()
    {
        return $this->associateMembers;
    }

    /**
     * Add subTask
     *
     * @param \MaxProject\ProjectManagmentBundle\Entity\Task $subTask
     * @return Task
     */
    public function addSubTask(\MaxProject\ProjectManagmentBundle\Entity\Task $subTask)
    {
        $this->subTask[] = $subTask;

        return $this;
    }

    /**
     * Remove subTask
     *
     * @param \MaxProject\ProjectManagmentBundle\Entity\Task $subTask
     */
    public function removeSubTask(\MaxProject\ProjectManagmentBundle\Entity\Task $subTask)
    {
        $this->subTask->removeElement($subTask);
    }

    /**
     * Get subTask
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubTask()
    {
        return $this->subTask;
    }

    /**
     * Set project
     *
     * @param \MaxProject\ProjectManagmentBundle\Entity\Project $project
     * @return Task
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

    /**
     * Set parentTask
     *
     * @param \MaxProject\ProjectManagmentBundle\Entity\Task $parentTask
     * @return Task
     */
    public function setParentTask(\MaxProject\ProjectManagmentBundle\Entity\Task $parentTask = null)
    {
        $this->parentTask = $parentTask;

        return $this;
    }

    /**
     * Get parentTask
     *
     * @return \MaxProject\ProjectManagmentBundle\Entity\Task
     */
    public function getParentTask()
    {
        return $this->parentTask;
    }
}
