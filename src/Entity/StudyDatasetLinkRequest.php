<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StudyDatasetLinkRequestRepository")
 */
class StudyDatasetLinkRequest
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Dataset", inversedBy="studyDatasetLinkRequests")
     * @ORM\JoinColumn(nullable=false)
     */
    private $dataset;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FosUser", inversedBy="studyDatasetLinkRequests")
     * @ORM\JoinColumn(nullable=false)
     */
    private $requester;

    /**
     * @ORM\Column(type="datetime")
     */
    private $requestedAt;

    /**
     * @ORM\Column(type="integer")
     */
    private $Status;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Study", inversedBy="studyDatasetLinkRequests")
     * @ORM\JoinColumn(nullable=false)
     */
    private $study;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDataset(): ?Dataset
    {
        return $this->dataset;
    }

    public function setDataset(?Dataset $dataset): self
    {
        $this->dataset = $dataset;

        return $this;
    }

    public function getRequester(): ?FosUser
    {
        return $this->requester;
    }

    public function setRequester(?FosUser $requester): self
    {
        $this->requester = $requester;

        return $this;
    }

    public function getRequestedAt(): ?\DateTimeInterface
    {
        return $this->requestedAt;
    }

    public function setRequestedAt(\DateTimeInterface $requestedAt): self
    {
        $this->requestedAt = $requestedAt;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->Status;
    }

    public function setStatus(int $Status): self
    {
        $this->Status = $Status;

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
}
