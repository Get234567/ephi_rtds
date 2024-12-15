<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AffiliationRepository")
 */
class Affiliation
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\DownloadRequest", mappedBy="affliation")
     */
    private $downloadRequests;

    public function __construct()
    {
        $this->downloadRequests = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|DownloadRequest[]
     */
    public function getDownloadRequests(): Collection
    {
        return $this->downloadRequests;
    }

    public function addDownloadRequest(DownloadRequest $downloadRequest): self
    {
        if (!$this->downloadRequests->contains($downloadRequest)) {
            $this->downloadRequests[] = $downloadRequest;
            $downloadRequest->setAffliation($this);
        }

        return $this;
    }

    public function removeDownloadRequest(DownloadRequest $downloadRequest): self
    {
        if ($this->downloadRequests->contains($downloadRequest)) {
            $this->downloadRequests->removeElement($downloadRequest);
            // set the owning side to null (unless already changed)
            if ($downloadRequest->getAffliation() === $this) {
                $downloadRequest->setAffliation(null);
            }
        }

        return $this;
    }
}
