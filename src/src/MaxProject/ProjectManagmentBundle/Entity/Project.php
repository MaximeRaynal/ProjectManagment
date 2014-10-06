<?php

namespace MaxProject\ProjectManagmentBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Un project est le plus haut niveau atomique
 */
class Project implements \JsonSerializable {

    private $id;

    private $name;

    private $description;

    private $dateStart;

    private $dateEnd;

    private $members;

    private $backlog;

    private $avaibleLabel;

    private $axes;

    private $sprints;

    public function __construct() {
        $this->members = new ArrayCollection();
        $this->backlog = new ArrayCollection();
        $this->sprints = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Project
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
     * @return Project
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
     * Set dateStart
     *
     * @param \DateTime $dateStart
     * @return Project
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     * @return Project
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set avaibleLabel
     *
     * @param array $avaibleLabel
     * @return Project
     */
    public function setAvaibleLabel($avaibleLabel)
    {
        $this->avaibleLabel = $avaibleLabel;

        return $this;
    }

    /**
     * Get avaibleLabel
     *
     * @return array
     */
    public function getAvaibleLabel()
    {
        return $this->avaibleLabel;
    }

    /**
     * Set axes
     *
     * @param array $axes
     * @return Project
     */
    public function setAxes($axes)
    {
        $this->axes = $axes;

        return $this;
    }

    /**
     * Get axes
     *
     * @return array
     */
    public function getAxes()
    {
        return $this->axes;
    }



    /**
     * Add members
     *
     * @param \MaxProject\ProjectManagmentBundle\Entity\User $members
     * @return Project
     */
    public function addMember(\MaxProject\ProjectManagmentBundle\Entity\User $members)
    {
        $this->members[] = $members;

        return $this;
    }

    /**
     * Remove members
     *
     * @param \MaxProject\ProjectManagmentBundle\Entity\User $members
     */
    public function removeMember(\MaxProject\ProjectManagmentBundle\Entity\User $members)
    {
        $this->members->removeElement($members);
    }

    /**
     * Get members
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Add backlog
     *
     * @param \MaxProject\ProjectManagmentBundle\Entity\Task $backlog
     * @return Project
     */
    public function addBacklog(\MaxProject\ProjectManagmentBundle\Entity\Task $backlog)
    {
        $this->backlog[] = $backlog;

        return $this;
    }

    /**
     * Remove backlog
     *
     * @param \MaxProject\ProjectManagmentBundle\Entity\Task $backlog
     */
    public function removeBacklog(\MaxProject\ProjectManagmentBundle\Entity\Task $backlog)
    {
        $this->backlog->removeElement($backlog);
    }

    /**
     * Get backlog
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBacklog()
    {
        return $this->backlog;
    }

    /**
     * Add sprints
     *
     * @param \MaxProject\ProjectManagmentBundle\Entity\Sprint $sprints
     * @return Project
     */
    public function addSprint(\MaxProject\ProjectManagmentBundle\Entity\Sprint $sprints)
    {
        $this->sprints[] = $sprints;

        return $this;
    }

    /**
     * Remove sprints
     *
     * @param \MaxProject\ProjectManagmentBundle\Entity\Sprint $sprints
     */
    public function removeSprint(\MaxProject\ProjectManagmentBundle\Entity\Sprint $sprints)
    {
        $this->sprints->removeElement($sprints);
    }

    /**
     * Get sprints
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSprints()
    {
        return $this->sprints;
    }

    public function JsonSerialize()
    {
        $vars = get_object_vars($this);
        $vars['dateStart'] = $this->dateStart->getTimestamp();
        $vars['dateEnd'] = $this->dateEnd->getTimestamp();
        $vars['backlog'] = $this->backlog->toArray();

        return $vars;
    }
}
