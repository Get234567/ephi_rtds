<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Studydataset
 *
 * @ORM\Table(name="studydataset", indexes={@ORM\Index(name="study_id", columns={"study_id"}), @ORM\Index(name="study_dataset_status_id", columns={"study_dataset_status_id"}), @ORM\Index(name="dataset_id", columns={"dataset_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\StudydatasetRepository")
 */
class Studydataset
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
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var \Dataset
     *
     * @ORM\ManyToOne(targetEntity="Dataset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dataset_id", referencedColumnName="id")
     * })
     */
    private $dataset;

    /**
     * @var \StudyDatasetStatus
     *
     * @ORM\ManyToOne(targetEntity="StudyDatasetStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="study_dataset_status_id", referencedColumnName="id")
     * })
     */
    private $studyDatasetStatus;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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

    public function getStudyDatasetStatus(): ?StudyDatasetStatus
    {
        return $this->studyDatasetStatus;
    }

    public function setStudyDatasetStatus(?StudyDatasetStatus $studyDatasetStatus): self
    {
        $this->studyDatasetStatus = $studyDatasetStatus;

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
