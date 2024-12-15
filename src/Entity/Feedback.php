<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FeedbackRepository")
 */
class Feedback
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FosUser")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sender;

    /**
     * @ORM\Column(type="text")
     */
    private $message;

  

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Study", inversedBy="feedback")
     */
    private $study;

    /**
     * @ORM\Column(type="datetime")
     */
    private $recieved_on;

    /**
     * @ORM\Column(type="boolean")
     */
    private $seen;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSender(): ?FosUser
    {
        return $this->sender;
    }

    public function setSender(?FosUser $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

  
   

    public function getStudy(): ?Study
    {
        return $this->study;
    }

    public function setStudy(?Study $study): self
    {
        $this->study = $study;

        return $this;
    }

    public function getRecievedOn(): ?\DateTime
    {
        return $this->recieved_on;
    }
    public function getRecieved_on(): ?\DateTime
    {
        return $this->recieved_on;
    }

    public function setRecievedOn(\DateTime $recieved_on): self
    {
        $this->recieved_on = $recieved_on;

        return $this;
    }

    public function getSeen(): ?bool
    {
        return $this->seen;
    }

    public function setSeen(bool $seen): self
    {
        $this->seen = $seen;

        return $this;
    }
}
