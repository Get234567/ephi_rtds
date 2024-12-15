<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StudyDataType
 *
 * @ORM\Table(name="study_data_type", indexes={@ORM\Index(name="study_id", columns={"study_id"}), @ORM\Index(name="data_type_id", columns={"data_type_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\StudyDataTypeRepository")
 */
class StudyDataType
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
     * @var \DataType
     *
     * @ORM\ManyToOne(targetEntity="DataType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="data_type_id", referencedColumnName="id")
     * })
     */
    private $dataType;

    /**
     * @var \Study
     *
     * @ORM\ManyToOne(targetEntity="Study")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="study_id", referencedColumnName="id")
     * })
     */
    private $study;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDataType(): ?DataType
    {
        return $this->dataType;
    }

    public function setDataType(?DataType $dataType): self
    {
        $this->dataType = $dataType;

        return $this;
    }

    public function getStudy(): ?Study
    {
        return $this->study;
    }

    public function setStudy(?Study $study): self
    {
        $this->study = $study;

        return $this;
    }


}
