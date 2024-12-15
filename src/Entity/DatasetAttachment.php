<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DatasetAttachmentRepository")
 */
class DatasetAttachment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;



    /**
     * @ORM\Column(type="string", length=255)
     */
    private $attachment;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Dataset", inversedBy="datasetAttachments")
     */
    private $dataset;



    public function getId(): ?int
    {
        return $this->id;
    }


    public function getAttachment(): ?string
    {
        return $this->attachment;
    }

    public function setAttachment(string $attachment): self
    {
        $this->attachment = $attachment;

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
