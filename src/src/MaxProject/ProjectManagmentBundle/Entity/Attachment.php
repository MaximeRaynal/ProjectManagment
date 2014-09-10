<?php

namespace MaxProject\ProjectManagmentBundle\Entity;

abstract class Attachment {

    private $id;

    private $author;

    private $task;

    private $postDate;


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
     * Set postDate
     *
     * @param \DateTime $postDate
     * @return Attachment
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;

        return $this;
    }

    /**
     * Get postDate
     *
     * @return \DateTime 
     */
    public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * Set author
     *
     * @param \MaxProject\ProjectManagmentBundle\Entity\User $author
     * @return Attachment
     */
    public function setAuthor(\MaxProject\ProjectManagmentBundle\Entity\User $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \MaxProject\ProjectManagmentBundle\Entity\User 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set task
     *
     * @param \MaxProject\ProjectManagmentBundle\Entity\Task $task
     * @return Attachment
     */
    public function setTask(\MaxProject\ProjectManagmentBundle\Entity\Task $task = null)
    {
        $this->task = $task;

        return $this;
    }

    /**
     * Get task
     *
     * @return \MaxProject\ProjectManagmentBundle\Entity\Task 
     */
    public function getTask()
    {
        return $this->task;
    }
}
