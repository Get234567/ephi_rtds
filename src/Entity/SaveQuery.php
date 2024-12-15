<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SaveQueryRepository")
 */
class SaveQuery
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $query;

    /**
     * @ORM\Column(type="datetime")
     */
    private $savedAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FosUser", inversedBy="saveQueries")
     */
    private $savedBy;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $auto;

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

    public function getQuery(): ?string
    {
        return $this->query;
    }

    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    public function getSavedAt(): ?\DateTimeInterface
    {
        return $this->savedAt;
    }

    public function setSavedAt(\DateTimeInterface $savedAt): self
    {
        $this->savedAt = $savedAt;

        return $this;
    }

    public function getSavedBy(): ?FosUser
    {
        return $this->savedBy;
    }

    public function setSavedBy(?FosUser $savedBy): self
    {
        $this->savedBy = $savedBy;

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

    public function getAuto(): ?bool
    {
        return $this->auto;
    }

    public function setAuto(bool $auto): self
    {
        $this->auto = $auto;

        return $this;
    }
}
