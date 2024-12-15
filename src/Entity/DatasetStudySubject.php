<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DatasetStudySubject
 *
 * @ORM\Table(name="dataset_study_subject", indexes={@ORM\Index(name="study_subject_id", columns={"study_subject_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\DatasetStudySubjectRepository")
 */
class DatasetStudySubject
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
     * @ORM\Column(name="dataset_id", type="integer", nullable=false)
     */
    private $datasetId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", nullable=false)
     */
    private $description;

    /**
     * @var \StudySubject
     *
     * @ORM\ManyToOne(targetEntity="StudySubject")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="study_subject_id", referencedColumnName="id")
     * })
     */
    private $studySubject;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatasetId(): ?int
    {
        return $this->datasetId;
    }

    public function setDatasetId(int $datasetId): self
    {
        $this->datasetId = $datasetId;

        return $this;
    }

   
    public function getStudySubject(): ?StudySubject
    {
        return $this->studySubject;
    }

    public function setStudySubject(?StudySubject $studySubject): self
    {
        $this->studySubject = $studySubject;

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


}
