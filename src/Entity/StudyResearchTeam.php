<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StudyResearchTeam
 *
 * @ORM\Table(name="study_research_team", indexes={@ORM\Index(name="study_id", columns={"study_id"}), @ORM\Index(name="research_team_id", columns={"research_team_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\StudyResearchTeamRepository")
 */
class StudyResearchTeam
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
     * @var \ResearchTeam
     *
     * @ORM\ManyToOne(targetEntity="ResearchTeam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="research_team_id", referencedColumnName="id")
     * })
     */
    private $researchTeam;

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

    public function getResearchTeam(): ?ResearchTeam
    {
        return $this->researchTeam;
    }

    public function setResearchTeam(?ResearchTeam $researchTeam): self
    {
        $this->researchTeam = $researchTeam;

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
