<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DownloadRequestApproverRepository")
 */
class DownloadRequestApprover
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FosUser", inversedBy="downloadRequestApprovers")
     */
    private $approver;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\DownloadRequest", inversedBy="downloadRequestApprovers")
     */
    private $request;

    /**
     * @ORM\Column(type="datetime")
     */
    private $approvedAt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isApproved;

    /**
     * @ORM\Column(type="integer")
     */
    private $requestDirection;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $message;

    /**
     * @ORM\Column(type="integer")
     */
    private $queryType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getApprover(): ?FosUser
    {
        return $this->approver;
    }

    public function setApprover(?FosUser $approver): self
    {
        $this->approver = $approver;

        return $this;
    }

    public function getRequest(): ?DownloadRequest
    {
        return $this->request;
    }

    public function setRequest(?DownloadRequest $request): self
    {
        $this->request = $request;

        return $this;
    }

    public function getApprovedAt(): ?\DateTimeInterface
    {
        return $this->approvedAt;
    }

    public function setApprovedAt(\DateTimeInterface $approvedAt): self
    {
        $this->approvedAt = $approvedAt;

        return $this;
    }

    public function getIsApproved(): ?bool
    {
        return $this->isApproved;
    }

    public function setIsApproved(bool $isApproved): self
    {
        $this->isApproved = $isApproved;

        return $this;
    }

    public function getRequestDirection(): ?int
    {
        return $this->requestDirection;
    }

    public function setRequestDirection(int $requestDirection): self
    {
        $this->requestDirection = $requestDirection;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getQueryType(): ?int
    {
        return $this->queryType;
    }

    public function setQueryType(int $queryType): self
    {
        $this->queryType = $queryType;

        return $this;
    }
}
