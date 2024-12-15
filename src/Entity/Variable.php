<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Variable
 *
 * @ORM\Table(name="variable", indexes={@ORM\Index(name="dataset_id", columns={"dataset_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\VariableRepository")
 */
class Variable
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
     * @ORM\Column(name="label_description", type="string", length=1600, nullable=false)
     */
    private $labelDescription;

    /**
     * @var int
     *
     * @ORM\Column(name="value_code", type="integer", nullable=false)
     */
    private $valueCode;

    /**
     * @var string
     *
     * @ORM\Column(name="value_level", type="string", length=1600, nullable=false)
     */
    private $valueLevel;

    /**
     * @var int
     *
     * @ORM\Column(name="range_of_value", type="integer", nullable=false)
     */
    private $rangeOfValue;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLabelDescription(): ?string
    {
        return $this->labelDescription;
    }

    public function setLabelDescription(string $labelDescription): self
    {
        $this->labelDescription = $labelDescription;

        return $this;
    }

    public function getValueCode(): ?int
    {
        return $this->valueCode;
    }

    public function setValueCode(int $valueCode): self
    {
        $this->valueCode = $valueCode;

        return $this;
    }

    public function getValueLevel(): ?string
    {
        return $this->valueLevel;
    }

    public function setValueLevel(string $valueLevel): self
    {
        $this->valueLevel = $valueLevel;

        return $this;
    }

    public function getRangeOfValue(): ?int
    {
        return $this->rangeOfValue;
    }

    public function setRangeOfValue(int $rangeOfValue): self
    {
        $this->rangeOfValue = $rangeOfValue;

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
