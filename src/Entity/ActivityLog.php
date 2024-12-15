<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ActivityLogRepository")
 */
class ActivityLog
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FosUser", inversedBy="activityLogs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Sender;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FosUser")
     */
    private $ApprovedBy;

    /**
     * @ORM\Column(type="integer")
     */
    private $Status;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Remark;

    /**
     * @ORM\Column(type="integer")
     */
    private $ItemID;

     /**
     * @ORM\Column(type="datetime")
     */
    private $RequestedDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $ApprovedDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $RequestType;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ItemType;

    /**
     * @ORM\Column(type="boolean")
     */
    private $seen;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $AttachmentId;

    public function __toString()
    {
        return "dfhgrtdf";
    }

  

    public function getId(): ?int
    {
        return $this->id;
    }

  

    public function getSender(): ?FosUser
    {
        return $this->Sender;
    }

    public function setSender(?FosUser $Sender): self
    {
        $this->Sender = $Sender;

        return $this;
    }

    public function getApprovedBy(): ?FosUser
    {
        return $this->ApprovedBy;
    }

    public function setApprovedBy(?FosUser $ApprovedBy): self
    {
        $this->ApprovedBy = $ApprovedBy;

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

    public function getRemark(): ?string
    {
        return $this->Remark;
    }

    public function setRemark(?string $Remark): self
    {
        $this->Remark = $Remark;

        return $this;
    }

    public function getItemID(): ?int
    {
        return $this->ItemID;
    }

    public function setItemID(int $ItemID): self
    {
        $this->ItemID = $ItemID;

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

    public function setApprovedDate(?\DateTimeInterface $ApprovedDate): self
    {
        $this->ApprovedDate = $ApprovedDate;

        return $this;
    }

    public function getRequestType(): ?string
    {
        return $this->RequestType;
    }

    public function setRequestType(string $RequestType): self
    {
        $this->RequestType = $RequestType;

        return $this;
    }

    public function getItemType(): ?string
    {
        return $this->ItemType;
    }

    public function setItemType(string $ItemType): self
    {
        $this->ItemType = $ItemType;

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

    public function getAttachmentId(): ?int
    {
        return $this->AttachmentId;
    }

    public function setAttachmentId(?int $AttachmentId): self
    {
        $this->AttachmentId = $AttachmentId;

        return $this;
    }    

}
