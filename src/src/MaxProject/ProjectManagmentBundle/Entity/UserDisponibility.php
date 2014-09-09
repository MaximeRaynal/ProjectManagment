<?php

namespace MaxProject\ProjectManagmentBundle\Entity;

class UserDisponibility {

    private $id;

    private $user;

    private $project;

    private $matrix;

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
     * Set matrix
     *
     * @param array $matrix
     * @return UserDisponibility
     */
    public function setMatrix($matrix)
    {
        $this->matrix = $matrix;

        return $this;
    }

    /**
     * Get matrix
     *
     * @return array 
     */
    public function getMatrix()
    {
        return $this->matrix;
    }

    /**
     * Set project
     *
     * @param \MaxProject\ProjectManagmentBundle\Entity\Project $project
     * @return UserDisponibility
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
     * Set user
     *
     * @param \MaxProject\ProjectManagmentBundle\Entity\User $user
     * @return UserDisponibility
     */
    public function setUser(\MaxProject\ProjectManagmentBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \MaxProject\ProjectManagmentBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
