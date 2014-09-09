<?php

namespace MaxProject\ProjectManagmentBundle\Entity;

class Message extends Attachment {

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $message;

    /**
     * @var \MaxProject\ProjectManagmentBundle\Entity\User
     */
    private $author;


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
     * Set message
     *
     * @param string $message
     * @return Message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set author
     *
     * @param \MaxProject\ProjectManagmentBundle\Entity\User $author
     * @return Message
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
}
