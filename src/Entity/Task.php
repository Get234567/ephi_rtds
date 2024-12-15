<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TaskRepository")
 */
class Task
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="text", length=65535, nullable=true)
     */
    private $Description;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Milestone", inversedBy="tasks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $milestone;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Study", inversedBy="tasks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $study;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Attachments;

    /**
     * @ORM\Column(type="smallint")
     */
    private $done;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getMilestone(): ?Milestone
    {
        return $this->milestone;
    }

    public function setMilestone(?Milestone $milestone): self
    {
        $this->milestone = $milestone;

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

    public function getAttachments(): ?string
    {
        return $this->Attachments;
    }

    public function setAttachments(?string $Attachments): self
    {
        $this->Attachments = $Attachments;

        return $this;
    }

    public function getDone(): ?int
    {
        return $this->done;
    }

    public function setDone(int $done): self
    {
        $this->done = $done;

        return $this;
    }
}
