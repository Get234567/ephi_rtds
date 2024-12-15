<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * FundingSource
 *
 * @ORM\Table(name="funding_source")
 * @ORM\Entity(repositoryClass="App\Repository\FundingSourceRepository")
 */
class FundingSource
{
    public function __toString()
    {
        if(is_null($this->name)) {
            return 'NULL';
        }
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
     * @ORM\Column(name="description", type="string", length=1500, nullable=false)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Study", mappedBy="fundingSource")
     */
    private $studies;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fundtype;



    public function __construct()
    {
        $this->studies = new ArrayCollection();
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
     * @return Collection|Study[]
     */
    public function getStudies(): Collection
    {
        return $this->studies;
    }

    public function addStudy(Study $study): self
    {
        if (!$this->studies->contains($study)) {
            $this->studies[] = $study;
            $study->addFundingSource($this);
        }

        return $this;
    }

    public function removeStudy(Study $study): self
    {
        if ($this->studies->contains($study)) {
            $this->studies->removeElement($study);
            $study->removeFundingSource($this);
        }

        return $this;
    }

    public function getFundtype(): ?string
    {
        return $this->fundtype;
    }

    public function setFundtype(?string $fundtype): self
    {
        $this->fundtype = $fundtype;

        return $this;
    }

   

 

   


}
