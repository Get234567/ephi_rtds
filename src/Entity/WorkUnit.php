<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * WorkUnit
 *
 * @ORM\Table(name="work_unit")
 * @ORM\Entity(repositoryClass="App\Repository\WorkUnitRepository")
 */
class WorkUnit
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
     * @var \WorkUnit
     *
     * @ORM\ManyToOne(targetEntity="WorkUnit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent", referencedColumnName="id")
     * })
     */
    private $parent;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Dataset", mappedBy="workunit")
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

    public function getParent(): ?WorkUnit
    {
        return $this->parent;
    }

    public function setParent(?WorkUnit $parent): self
    {
        $this->parent = $parent;

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
            $dataset->setWorkUnit($this);
        }

        return $this;
    }

    public function removeDataset(Dataset $dataset): self
    {
        if ($this->datasets->contains($dataset)) {
            $this->datasets->removeElement($dataset);
            // set the owning side to null (unless already changed)
            if ($dataset->getWorkUnit() === $this) {
                $dataset->setWorkUnit(null);
            }
        }

        return $this;
    }


}
