<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DatasetCauseOfDeath
 *
 * @ORM\Table(name="dataset_cause_of_death", indexes={@ORM\Index(name="dataset_id", columns={"dataset_id"}), @ORM\Index(name="cause_of_death_id", columns={"cause_of_death_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\DatasetCauseOfDeathRepository")
 */
class DatasetCauseOfDeath
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="description", type="integer", nullable=false)
     */
    private $description;

    /**
     * @var \CauseOfDeath
     *
     * @ORM\ManyToOne(targetEntity="CauseOfDeath")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cause_of_death_id", referencedColumnName="id")
     * })
     */
    private $causeOfDeath;

    /**
     * @var \Dataset
     *
     * @ORM\ManyToOne(targetEntity="Dataset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dataset_id", referencedColumnName="id")
     * })
     */
    private $dataset;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?int
    {
        return $this->description;
    }

    public function setDescription(int $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCauseOfDeath(): ?CauseOfDeath
    {
        return $this->causeOfDeath;
    }

    public function setCauseOfDeath(?CauseOfDeath $causeOfDeath): self
    {
        $this->causeOfDeath = $causeOfDeath;

        return $this;
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


}
