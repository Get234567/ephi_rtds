<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table(name="tag")
 * @ORM\Entity(repositoryClass="App\Repository\TagRepository")
 */
class Tag
{
    public function __toString()
    {
        return $this->name;
    }
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1600, nullable=false)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Dataset", inversedBy="tags")
     */
    private $dataset;

    public function __construct()
    {
        $this->dataset = new ArrayCollection();
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
    public function getDataset(): Collection
    {
        return $this->dataset;
    }

    public function addDataset(Dataset $dataset): self
    {
        if (!$this->dataset->contains($dataset)) {
            $this->dataset[] = $dataset;
        }

        return $this;
    }

    public function removeDataset(Dataset $dataset): self
    {
        if ($this->dataset->contains($dataset)) {
            $this->dataset->removeElement($dataset);
        }

        return $this;
    }


}
