<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DatasetFormatRepository")
 */
class DatasetFormat
{
    public function __toString()
    {
        return $this->name;
    }
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
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Dataset", mappedBy="format")
     */
    private $datasets;

    public function __construct()
    {
        $this->datasets = new ArrayCollection();
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

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Dataset[]
     */
    public function getDatasets(): Collection
    {
        return $this->datasets;
    }

    public function addDataset(Dataset $dataset): self
    {
        if (!$this->datasets->contains($dataset)) {
            $this->datasets[] = $dataset;
            $dataset->setFormat($this);
        }

        return $this;
    }

    public function removeDataset(Dataset $dataset): self
    {
        if ($this->datasets->contains($dataset)) {
            $this->datasets->removeElement($dataset);
            // set the owning side to null (unless already changed)
            if ($dataset->getFormat() === $this) {
                $dataset->setFormat(null);
            }
        }

        return $this;
    }
}
