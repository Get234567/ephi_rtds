<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * ResearchTeam
 *
 * @ORM\Table(name="research_team")
 * @ORM\Entity(repositoryClass="App\Repository\ResearchTeamRepository")
 */
class ResearchTeam
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
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Researcher", mappedBy="team")
     */
    private $researchers;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Study", inversedBy="researchTeams")
     */
    private $study;

    public function __construct()
    {
        $this->researchers = new ArrayCollection();
        $this->study = new ArrayCollection();
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
     * @return Collection|Researcher[]
     */
    public function getResearchers(): Collection
    {
        return $this->researchers;
    }

    public function addResearcher(Researcher $researcher): self
    {
        if (!$this->researchers->contains($researcher)) {
            $this->researchers[] = $researcher;
            $researcher->addTeam($this);
        }

        return $this;
    }

    public function removeResearcher(Researcher $researcher): self
    {
        if ($this->researchers->contains($researcher)) {
            $this->researchers->removeElement($researcher);
            $researcher->removeTeam($this);
        }

        return $this;
    }

    /**
     * @return Collection|Study[]
     */
    public function getStudy(): Collection
    {
        return $this->study;
    }

    public function addStudy(Study $study): self
    {
        if (!$this->study->contains($study)) {
            $this->study[] = $study;
        }

        return $this;
    }

    public function removeStudy(Study $study): self
    {
        if ($this->study->contains($study)) {
            $this->study->removeElement($study);
        }

        return $this;
    }


}
