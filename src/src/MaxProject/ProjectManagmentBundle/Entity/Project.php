<?php

namespace MaxProject\ProjectManagmentBundle\Entity;

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

    public function JsonSerialize()
    {
        $vars = get_object_vars($this);
        $vars['dateStart'] = $this->dateStart->getTimestamp();
        $vars['dateEnd'] = $this->dateEnd->getTimestamp();

        return $vars;
    }
}
