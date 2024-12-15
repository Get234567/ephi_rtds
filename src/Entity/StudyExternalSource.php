<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StudyExternalSource
 *
 * @ORM\Table(name="study_external_source")
 * @ORM\Entity(repositoryClass="App\Repository\StudyExternalSourceRepository")
 */
class StudyExternalSource
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
     * @var \Study
     *
     * @ORM\ManyToOne(targetEntity="Study")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="study_id", referencedColumnName="id")
     * })
     */
    private $study;


    /**
     * @var int
     *
     * @ORM\Column(name="external_source_id", type="integer", nullable=false)
     */
    private $externalSourceId;

    /**
     * @var int
     *
     * @ORM\Column(name="description", type="integer", nullable=false)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }



    public function getExternalSourceId(): ?int
    {
        return $this->externalSourceId;
    }

    public function setExternalSourceId(int $externalSourceId): self
    {
        $this->externalSourceId = $externalSourceId;

        return $this;
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
