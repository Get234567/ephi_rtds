<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Study
 *
 * @ORM\Table(name="study", indexes={@ORM\Index(name="work_unit_id", columns={"work_unit_id"}), @ORM\Index(name="study_type_id", columns={"study_type_id"}), @ORM\Index(name="publisher_id", columns={"publisher_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\StudyRepository")
 */
class Study
{
    public function __toString()
    {
        return $this->title;
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
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="irb_code", type="string", length=255, nullable=false)
     */
    private $irbCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="year_conducted", type="datetime", nullable=true)
     */
    private $yearConducted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="year_published", type="datetime", nullable=true)
     */
    private $yearPublished;

    /**
     * @var float
     *
     * @ORM\Column(name="budget", type="float", nullable=false)
     */
    private $budget;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="objective", type="text", length=65535, nullable=false)
     */
    private $objective;

    /**
     * @var string
     *
     * @ORM\Column(name="research_question", type="text", length=65535, nullable=true)
     */
    private $researchQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="remark", type="text", length=65535, nullable=true)
     */
    private $remark;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", length=65535, nullable=true)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="geography", type="text", nullable=false)
     */
    private $geography;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_period_coverage_start", type="datetime", nullable=true)
     */
    private $timePeriodCoverageStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_period_coverage_end", type="datetime", nullable=true)
     */
    private $timePeriodCoverageEnd;

    /**
     * @var \Publisher
     *
     * @ORM\ManyToOne(targetEntity="Publisher")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="publisher_id", referencedColumnName="id")
     * })
     */
    private $publisher;

    /**
     * @var \StudyType
     *
     * @ORM\ManyToOne(targetEntity="StudyType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="study_type_id", referencedColumnName="id")
     * })
     */
    private $studyType;

    /**
     * @var \WorkUnit
     *
     * @ORM\ManyToOne(targetEntity="WorkUnit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="work_unit_id", referencedColumnName="id")
     * })
     */
    private $workUnit;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\FundingSource", inversedBy="studies")
     */
    private $fundingSource;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Avaliablity;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\ResearchTeam", mappedBy="study")
     */
    private $researchTeams;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Task", mappedBy="study")
     */
    private $tasks;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\DataType", inversedBy="studies")
     */
    private $dataType;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $projectOwner;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $PIName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $PIPhone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $PIEmail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $CO_PIName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $CO_PIPhone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $CO_PIEmail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ResearchProposal;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $EthicalClearance;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Report;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CoverageType", inversedBy="studies")
     */
    private $coverage;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $status;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\FosUser", inversedBy="studies")
     */
    private $owner;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Dataset", mappedBy="study")
     */
    private $datasets;



    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Currency")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cur;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FosUser")
     */
    private $creator;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\JoinStudy", mappedBy="study", orphanRemoval=true)
     */
    private $joinStudies;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\StudyResearcher", mappedBy="study", orphanRemoval=true)
     */
    private $studyResearchers;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FosUser", inversedBy="reviewerStudies")
     */
    private $reviewer;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $CreatedAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $UpdatedAt;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\StudyDatasetLinkRequest", mappedBy="study")
     */
    private $studyDatasetLinkRequests;












    public function __construct()
    {
        $this->fundingSource = new ArrayCollection();
        $this->researchTeams = new ArrayCollection();
        $this->tasks = new ArrayCollection();
        $this->owner = new ArrayCollection();
        $this->datasets = new ArrayCollection();
        $this->joinStudies = new ArrayCollection();
        $this->studyResearchers = new ArrayCollection();
        $this->studyDatasetLinkRequests = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getIrbCode(): ?string
    {
        return $this->irbCode;
    }

    public function setIrbCode(string $irbCode): self
    {
        $this->irbCode = $irbCode;

        return $this;
    }





    public function getBudget(): ?int
    {
        return $this->budget;
    }

    public function setBudget(int $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getObjective(): ?string
    {
        return $this->objective;
    }

    public function setObjective(string $objective): self
    {
        $this->objective = $objective;

        return $this;
    }

    public function getResearchQuestion(): ?string
    {
        return $this->researchQuestion;
    }

    public function setResearchQuestion($researchQuestion): self
    {
        $this->researchQuestion = $researchQuestion;

        return $this;
    }

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(string $remark): self
    {
        $this->remark = $remark;

        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary($summary): self
    {
        $this->summary = $summary;

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

    public function getGeography(): ?string
    {
        return $this->geography;
    }

    public function setGeography(string $geography): self
    {
        $this->geography = $geography;

        return $this;
    }





    public function getPublisher(): ?Publisher
    {
        return $this->publisher;
    }

    public function setPublisher(?Publisher $publisher): self
    {
        $this->publisher = $publisher;

        return $this;
    }

    public function getStudyType(): ?StudyType
    {
        return $this->studyType;
    }

    public function setStudyType(?StudyType $studyType): self
    {
        $this->studyType = $studyType;

        return $this;
    }

    public function getWorkUnit(): ?WorkUnit
    {
        return $this->workUnit;
    }

    public function setWorkUnit(?WorkUnit $workUnit): self
    {
        $this->workUnit = $workUnit;

        return $this;
    }

    /**
     * @return Collection|FundingSource[]
     */
    public function getFundingSource(): Collection
    {
        return $this->fundingSource;
    }

    public function addFundingSource(FundingSource $fundingSource): self
    {
        if (!$this->fundingSource->contains($fundingSource)) {
            $this->fundingSource[] = $fundingSource;
        }

        return $this;
    }

    public function removeFundingSource(FundingSource $fundingSource): self
    {
        if ($this->fundingSource->contains($fundingSource)) {
            $this->fundingSource->removeElement($fundingSource);
        }

        return $this;
    }

    public function getAvaliablity(): ?string
    {
        return $this->Avaliablity;
    }

    public function setAvaliablity(?string $Avaliablity): self
    {
        $this->Avaliablity = $Avaliablity;

        return $this;
    }

    /**
     * @return Collection|ResearchTeam[]
     */
    public function getResearchTeams(): Collection
    {
        return $this->researchTeams;
    }

    public function addResearchTeam(ResearchTeam $researchTeam): self
    {
        if (!$this->researchTeams->contains($researchTeam)) {
            $this->researchTeams[] = $researchTeam;
            $researchTeam->addStudy($this);
        }

        return $this;
    }

    public function removeResearchTeam(ResearchTeam $researchTeam): self
    {
        if ($this->researchTeams->contains($researchTeam)) {
            $this->researchTeams->removeElement($researchTeam);
            $researchTeam->removeStudy($this);
        }

        return $this;
    }

    /**
     * @return Collection|Task[]
     */
    public function getTasks(): Collection
    {
        return $this->tasks;
    }

    public function addTask(Task $task): self
    {
        if (!$this->tasks->contains($task)) {
            $this->tasks[] = $task;
            $task->setStudy($this);
        }

        return $this;
    }

    public function removeTask(Task $task): self
    {
        if ($this->tasks->contains($task)) {
            $this->tasks->removeElement($task);
            // set the owning side to null (unless already changed)
            if ($task->getStudy() === $this) {
                $task->setStudy(null);
            }
        }

        return $this;
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

    public function getProjectOwner(): ?string
    {
        return $this->projectOwner;
    }

    public function setProjectOwner(string $projectOwner): self
    {
        $this->projectOwner = $projectOwner;

        return $this;
    }

    public function getPIName(): ?string
    {
        return $this->PIName;
    }

    public function setPIName(?string $PIName): self
    {
        $this->PIName = $PIName;

        return $this;
    }

    public function getPIPhone(): ?string
    {
        return $this->PIPhone;
    }

    public function setPIPhone(?string $PIPhone): self
    {
        $this->PIPhone = $PIPhone;

        return $this;
    }

    public function getPIEmail(): ?string
    {
        return $this->PIEmail;
    }

    public function setPIEmail(?string $PIEmail): self
    {
        $this->PIEmail = $PIEmail;

        return $this;
    }

    public function getCOPIName(): ?string
    {
        return $this->CO_PIName;
    }

    public function setCOPIName(?string $CO_PIName): self
    {
        $this->CO_PIName = $CO_PIName;

        return $this;
    }

    public function getCOPIPhone(): ?string
    {
        return $this->CO_PIPhone;
    }

    public function setCOPIPhone(?string $CO_PIPhone): self
    {
        $this->CO_PIPhone = $CO_PIPhone;

        return $this;
    }

    public function getCOPIEmail(): ?string
    {
        return $this->CO_PIEmail;
    }

    public function setCOPIEmail(?string $CO_PIEmail): self
    {
        $this->CO_PIEmail = $CO_PIEmail;

        return $this;
    }

    public function getResearchProposal(): ?string
    {
        return $this->ResearchProposal;
    }

    public function setResearchProposal(?string $ResearchProposal): self
    {
        $this->ResearchProposal = $ResearchProposal;

        return $this;
    }

    public function getEthicalClearance(): ?string
    {
        return $this->EthicalClearance;
    }

    public function setEthicalClearance(?string $EthicalClearance): self
    {
        $this->EthicalClearance = $EthicalClearance;

        return $this;
    }

    public function getReport(): ?string
    {
        return $this->Report;
    }

    public function setReport(?string $Report): self
    {
        $this->Report = $Report;

        return $this;
    }

    public function getCoverage(): ?CoverageType
    {
        return $this->coverage;
    }

    public function setCoverage(?CoverageType $coverage): self
    {
        $this->coverage = $coverage;

        return $this;
    }

    public function getYearConducted(): ?\DateTimeInterface
    {
        return $this->yearConducted;
    }

    public function setYearConducted(?\DateTimeInterface $yearConducted): self
    {
        $this->yearConducted = $yearConducted;

        return $this;
    }

    public function getYearPublished(): ?\DateTimeInterface
    {
        return $this->yearPublished;
    }

    public function setYearPublished(?\DateTimeInterface $yearPublished): self
    {
        $this->yearPublished = $yearPublished;

        return $this;
    }

    public function getTimePeriodCoverageStart(): ?\DateTimeInterface
    {
        return $this->timePeriodCoverageStart;
    }

    public function setTimePeriodCoverageStart(?\DateTimeInterface $timePeriodCoverageStart): self
    {
        $this->timePeriodCoverageStart = $timePeriodCoverageStart;

        return $this;
    }

    public function getTimePeriodCoverageEnd(): ?\DateTimeInterface
    {
        return $this->timePeriodCoverageEnd;
    }

    public function setTimePeriodCoverageEnd(?\DateTimeInterface $timePeriodCoverageEnd): self
    {
        $this->timePeriodCoverageEnd = $timePeriodCoverageEnd;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getMilestonePhase(): ?int
    {
        return $this->milestone_phase;
    }

    public function setMilestonePhase(int $milestone_phase): self
    {
        $this->milestone_phase = $milestone_phase;

        return $this;
    }

    /**
     * @return Collection|FosUser[]
     */
    public function getOwner(): Collection
    {
        return $this->owner;
    }

    public function addOwner(FosUser $owner): self
    {
        if (!$this->owner->contains($owner)) {
            $this->owner[] = $owner;
        }

        return $this;
    }

    public function removeOwner(FosUser $owner): self
    {
        if ($this->owner->contains($owner)) {
            $this->owner->removeElement($owner);
        }

        return $this;
    }

    /**
     * @return Collection|Dataset[]
     */
    public function getDatasets(): Collection
    {
        return $this->datasets;
    }

    public function addDataset(Dataset $dataset): self
    {
        if (!$this->datasets->contains($dataset)) {
            $this->datasets[] = $dataset;
            $dataset->addStudy($this);
        }

        return $this;
    }

    public function removeDataset(Dataset $dataset): self
    {
        if ($this->datasets->contains($dataset)) {
            $this->datasets->removeElement($dataset);
            $dataset->removeStudy($this);
        }

        return $this;
    }

    public function getCur(): ?Currency
    {
        return $this->cur;
    }

    public function setCur(?Currency $cur): self
    {
        $this->cur = $cur;

        return $this;
    }

    public function getCreator(): ?FosUser
    {
        return $this->creator;
    }

    public function setCreator(?FosUser $creator): self
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * @return Collection|JoinStudy[]
     */
    public function getJoinStudies(): Collection
    {
        return $this->joinStudies;
    }

    public function addJoinStudy(JoinStudy $joinStudy): self
    {
        if (!$this->joinStudies->contains($joinStudy)) {
            $this->joinStudies[] = $joinStudy;
            $joinStudy->setStudy($this);
        }

        return $this;
    }

    public function removeJoinStudy(JoinStudy $joinStudy): self
    {
        if ($this->joinStudies->contains($joinStudy)) {
            $this->joinStudies->removeElement($joinStudy);
            // set the owning side to null (unless already changed)
            if ($joinStudy->getStudy() === $this) {
                $joinStudy->setStudy(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|StudyResearcher[]
     */
    public function getStudyResearchers(): Collection
    {
        return $this->studyResearchers;
    }

    public function addStudyResearcher(StudyResearcher $studyResearcher): self
    {
        if (!$this->studyResearchers->contains($studyResearcher)) {
            $this->studyResearchers[] = $studyResearcher;
            $studyResearcher->setStudy($this);
        }

        return $this;
    }

    public function removeStudyResearcher(StudyResearcher $studyResearcher): self
    {
        if ($this->studyResearchers->contains($studyResearcher)) {
            $this->studyResearchers->removeElement($studyResearcher);
            // set the owning side to null (unless already changed)
            if ($studyResearcher->getStudy() === $this) {
                $studyResearcher->setStudy(null);
            }
        }

        return $this;
    }

    public function getReviewer(): ?FosUser
    {
        return $this->reviewer;
    }

    public function setReviewer(?FosUser $reviewer): self
    {
        $this->reviewer = $reviewer;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->CreatedAt;
    }

    public function setCreatedAt(?\DateTimeInterface $CreatedAt): self
    {
        $this->CreatedAt = $CreatedAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->UpdatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $UpdatedAt): self
    {
        $this->UpdatedAt = $UpdatedAt;

        return $this;
    }

    /**
     * @return Collection|StudyDatasetLinkRequest[]
     */
    public function getStudyDatasetLinkRequests(): Collection
    {
        return $this->studyDatasetLinkRequests;
    }

    public function addStudyDatasetLinkRequest(StudyDatasetLinkRequest $studyDatasetLinkRequest): self
    {
        if (!$this->studyDatasetLinkRequests->contains($studyDatasetLinkRequest)) {
            $this->studyDatasetLinkRequests[] = $studyDatasetLinkRequest;
            $studyDatasetLinkRequest->setStudy($this);
        }

        return $this;
    }

    public function removeStudyDatasetLinkRequest(StudyDatasetLinkRequest $studyDatasetLinkRequest): self
    {
        if ($this->studyDatasetLinkRequests->contains($studyDatasetLinkRequest)) {
            $this->studyDatasetLinkRequests->removeElement($studyDatasetLinkRequest);
            // set the owning side to null (unless already changed)
            if ($studyDatasetLinkRequest->getStudy() === $this) {
                $studyDatasetLinkRequest->setStudy(null);
            }
        }

        return $this;
    }








}
