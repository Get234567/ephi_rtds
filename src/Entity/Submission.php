<?php

namespace App\Entity;
use App\Form\SubmissionType;
use Doctrine\ORM\Mapping as ORM;


/**
* Submission
*@ORM\Table(name="submissiondata")
 * @ORM\Entity(repositoryClass="App\Repository\SubmissionRepository")
 */
class Submission
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


     /**
      * @var \Dataowner
      *
      * @ORM\ManyToOne(targetEntity="Dataowner")
      * @ORM\JoinColumns({
      *   @ORM\JoinColumn(name="owner_id", referencedColumnName="id", nullable=true)
      * })
      */
    private $owner_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $submitted;

    /**
     * @ORM\Column(type="integer")
     */
    private $yearss;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getOwnerId(): ?Dataowner
    {
        return $this->owner_id;
    }

    public function setOwnerId(?Dataowner $owner_id): self
    {
        $this->owner_id = $owner_id;

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

    public function getYearss(): ?int
    {
        return $this->yearss;
    }

    public function setYearss(int $yearss): self
    {
        $this->yearss = $yearss;

        return $this;
    }
}
