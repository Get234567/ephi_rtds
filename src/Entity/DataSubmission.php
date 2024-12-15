<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DataSubmissionRepository")
 */
class DataSubmission
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $work_unit_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $submitted;

    /**
     * @ORM\Column(type="date")
     */
    private $Date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWorkUnitId(): ?int
    {
        return $this->work_unit_id;
    }

    public function setWorkUnitId(int $work_unit_id): self
    {
        $this->work_unit_id = $work_unit_id;

        return $this;
    }

    public function getSubmitted(): ?int
    {
        return $this->submitted;
    }

    public function setSubmitted(int $submitted): self
    {
        $this->submitted = $submitted;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }
}
