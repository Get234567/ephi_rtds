<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DownloadRequestRepository")
 */
class DownloadRequest
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
     * @ORM\Column(type="string", length=255)
     */
    private $MiddleName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LastName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Phone;

    /**
     * @ORM\Column(type="text")
     */
    private $Reason;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Dataset", inversedBy="downloadRequests")
     */
    private $Dataset;

    /**
     * @ORM\Column(type="json_array", nullable=true)
     */
    private $Attachment = [];

    /**
     * @ORM\Column(type="datetime")
     */
    private $RequestedDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $ApprovedDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Token;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $count;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Status;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $File;
  
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $restrictionFile;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $approver1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $approver2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $approver3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $affliation;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\DownloadRequestApprover", mappedBy="request")
     */
    private $downloadRequestApprovers;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FosUser", inversedBy="downloadRequests")
     */
    private $internalRequester;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $objective;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $rejectionMessage;

    public function __construct()
    {
        $this->downloadRequestApprovers = new ArrayCollection();
    }

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

    public function getMiddleName(): ?string
    {
        return $this->MiddleName;
    }

    public function setMiddleName(string $MiddleName): self
    {
        $this->MiddleName = $MiddleName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    public function setLastName(string $LastName): self
    {
        $this->LastName = $LastName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->Phone;
    }

    public function setPhone(string $Phone): self
    {
        $this->Phone = $Phone;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->Reason;
    }

    public function setReason(string $Reason): self
    {
        $this->Reason = $Reason;

        return $this;
    }

    public function getDataset(): ?Dataset
    {
        return $this->Dataset;
    }

    public function setDataset(?Dataset $Dataset): self
    {
        $this->Dataset = $Dataset;

        return $this;
    }

    public function getAttachment(): ?array
    {
        return $this->Attachment;
    }

    public function setAttachment(array $Attachment): self
    {
        $this->Attachment = $Attachment;

        return $this;
    }

    public function getRequestedDate(): ?\DateTimeInterface
    {
        return $this->RequestedDate;
    }

    public function setRequestedDate(\DateTimeInterface $RequestedDate): self
    {
        $this->RequestedDate = $RequestedDate;

        return $this;
    }

    public function getApprovedDate(): ?\DateTimeInterface
    {
        return $this->ApprovedDate;
    }

    public function setApprovedDate(\DateTimeInterface $ApprovedDate): self
    {
        $this->ApprovedDate = $ApprovedDate;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->Token;
    }

    public function setToken(string $Token): self
    {
        $this->Token = $Token;

        return $this;
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->Status;
    }

    public function setStatus(bool $Status): self
    {
        $this->Status = $Status;

        return $this;
    }

    public function getFile(): ?string
    {
        return $this->File;
    }

    public function setFile(string $File): self
    {
        $this->File = $File;

        return $this;
    }


    public function getRestrictionFile(): ?string
    {
        return $this->restrictionFile;
    }

    public function setRestrictionFile(string $restrictionFile): self
    {
        $this->restrictionFile = $restrictionFile;

        return $this;
    }

    public function getApprover1(): ?int
    {
        return $this->approver1;
    }

    public function setApprover1(?int $approver1): self
    {
        $this->approver1 = $approver1;

        return $this;
    }

    public function getApprover2(): ?int
    {
        return $this->approver2;
    }

    public function setApprover2(?int $approver2): self
    {
        $this->approver2 = $approver2;

        return $this;
    }

    public function getApprover3(): ?int
    {
        return $this->approver3;
    }

    public function setApprover3(?int $approver3): self
    {
        $this->approver3 = $approver3;

        return $this;
    }

    public function getAffliation(): ?string
    {
        return $this->affliation;
    }

    public function setAffliation(?string $affliation): self
    {
        $this->affliation = $affliation;

        return $this;
    }

    /**
     * @return Collection|DownloadRequestApprover[]
     */
    public function getDownloadRequestApprovers(): Collection
    {
        return $this->downloadRequestApprovers;
    }

    public function addDownloadRequestApprover(DownloadRequestApprover $downloadRequestApprover): self
    {
        if (!$this->downloadRequestApprovers->contains($downloadRequestApprover)) {
            $this->downloadRequestApprovers[] = $downloadRequestApprover;
            $downloadRequestApprover->setRequest($this);
        }

        return $this;
    }

    public function removeDownloadRequestApprover(DownloadRequestApprover $downloadRequestApprover): self
    {
        if ($this->downloadRequestApprovers->contains($downloadRequestApprover)) {
            $this->downloadRequestApprovers->removeElement($downloadRequestApprover);
            // set the owning side to null (unless already changed)
            if ($downloadRequestApprover->getRequest() === $this) {
                $downloadRequestApprover->setRequest(null);
            }
        }

        return $this;
    }

    public function getInternalRequester(): ?FosUser
    {
        return $this->internalRequester;
    }

    public function setInternalRequester(?FosUser $internalRequester): self
    {
        $this->internalRequester = $internalRequester;

        return $this;
    }

    public function getObjective(): ?string
    {
        return $this->objective;
    }

    public function setObjective(?string $objective): self
    {
        $this->objective = $objective;

        return $this;
    }

    public function getRejectionMessage(): ?string
    {
        return $this->rejectionMessage;
    }

    public function setRejectionMessage(?string $rejectionMessage): self
    {
        $this->rejectionMessage = $rejectionMessage;

        return $this;
    }
}
