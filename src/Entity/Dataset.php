<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Dataset
 *
 * @ORM\Table(name="dataset", indexes={@ORM\Index(name="dataset_category_id", columns={"dataset_category_id"}), @ORM\Index(name="study_design_id", columns={"study_design_id"}), @ORM\Index(name="microdata_tabulation_status_id", columns={"microdata_tabulation_status_id"}), @ORM\Index(name="coverage_type_id", columns={"coverage_type_id"}), @ORM\Index(name="record_type_id", columns={"record_type_id"}), @ORM\Index(name="geospatial_id", columns={"geospatial_id"}), @ORM\Index(name="confidentiality_id", columns={"confidentiality_id"}), @ORM\Index(name="publisher_id", columns={"publisher_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\DatasetRepository")
 */
class Dataset
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;


    /**
     * @var string
     *
     * @ORM\Column(name="coverage_location", type="string", length=1600, nullable=false)
     */
    private $coverageLocation;

    /**
     * @var int
     *
     * @ORM\Column(name="coverage_age", type="integer", nullable=true)
     */
    private $coverageAge;

    /**
     * @var string
     *
     * @ORM\Column(name="coverage_sex", type="string", length=1600, nullable=false)
     */
    private $coverageSex;


    /**
     * @var bool
     *
     * @ORM\Column(name="code_book", type="boolean", nullable=true)
     */
    private $codeBook;
  

    /**
     * @var bool
     *
     * @ORM\Column(name="is_published", type="boolean", nullable=true)
     */
    private $published;

    /**
     * @var bool
     *
     * @ORM\Column(name="qualityassessment", type="boolean", nullable=true)
     */
    private $qualityassessment;


    /**
     * @var string
     *
     * @ORM\Column(name="code_book_file_name", type="string", length=1600, nullable=true)
     */
    private $codeBookFileName;

    /**
     * @var string
     *
     * @ORM\Column(name="proposal", type="string", length=1600, nullable=true)
     */
    private $proposal;
    /**
     * @var string
     *
     * @ORM\Column(name="ethicalclearance", type="string", length=1600, nullable=true)
     */
    private $ethicalclearance;
    /**
     * @var string
     *
     * @ORM\Column(name="otherfile", type="string", length=1600, nullable=true)
     */
    private $otherfile;
    /**
     * @var string
     *
     * @ORM\Column(name="generating", type="string", length=1600, nullable=true)
     */
    private $generating;
    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="json",  nullable=true)
     */
    private $keywords;

    /**
     * @var bool
     *
     * @ORM\Column(name="recommended", type="text", nullable=false)
     */
    private $recommended;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=true)
     */
    private $location;

    /**
     * @var bool
     *
     * @ORM\Column(name="cleaned", type="boolean", nullable=true)
     */
    private $cleaned;


    /**
     * @var string
     *
     * @ORM\Column(name="cleaned_format", type="string", length=255, nullable=true)
     */
    private $cleanedFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="raw_format", type="string", length=255, nullable=false)
     */
    private $rawFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="remark", type="text", length=65535, nullable=true)
     */
    private $remark;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;



    /**
     * @var string
     *
     * @ORM\Column(name="treatment", type="text", length=65535, nullable=true)
     */
    private $treatment;

  /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_period_coverage_start", type="date", nullable=true)
     */
    private $timePeriodCoverageStart;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_period_coverage_end", type="date", nullable=true)
     */
    private $timePeriodCoverageEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;



    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publication_year", type="date", nullable=false)
     */
    private $publicationYear;

    /**
     * @var string
     *
     * @ORM\Column(name="sugested_citation", type="text", length=65535, nullable=true)
     */
    private $sugestedCitation;

    /**
     * @var string
     *
     * @ORM\Column(name="other_id_type", type="text", length=65535, nullable=true)
     */
    private $otherIdType;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="abstract", type="text", nullable=true)
     */
    private $abstract;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="recieved_date", type="datetime", nullable=false)
     */
    private $recievedDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="catalog_completed_date", type="datetime", nullable=false)
     */
    private $catalogCompletedDate;


    /**
     * @var \Confidentiality
     *
     * @ORM\ManyToOne(targetEntity="Confidentiality")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="confidentiality_id", referencedColumnName="id")
     * })
     */
    private $confidentiality;
    /**
     * @var \DataType
     *
     * @ORM\ManyToOne(targetEntity="DataType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="data_type_id", referencedColumnName="id")
     * })
     */

    private $dataType;

    /**
     * @var \StudyDesign
     *
     * @ORM\ManyToOne(targetEntity="StudyDesign")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="study_design_id", referencedColumnName="id")
     * })
     */
    private $studyDesign;

    /**
     * @var \CoverageType
     *
     * @ORM\ManyToOne(targetEntity="CoverageType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="coverage_type_id", referencedColumnName="id")
     * })
     */
    private $coverageType;

    /**
     * @var \DatasetCategory
     *
     * @ORM\ManyToOne(targetEntity="DatasetCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dataset_category_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $datasetCategory;


    /**
     * @var \Geospatial
     *
     * @ORM\ManyToOne(targetEntity="Geospatial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="geospatial_id", referencedColumnName="id")
     * })
     */
    private $geospatial;

    /**
     * @var \MicrodataTabulationStatus
     *
     * @ORM\ManyToOne(targetEntity="MicrodataTabulationStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="microdata_tabulation_status_id", referencedColumnName="id")
     * })
     */
    private $microdataTabulationStatus;



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
     * @var \RecordType
     *
     * @ORM\ManyToOne(targetEntity="RecordType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="record_type_id", referencedColumnName="id")
     * })
     */
    private $recordType;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $FileUrl;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Status;

        /**
     * @ORM\Column(type="integer")
     */
    private $downloadCount;
    /**
 * @ORM\Column(type="integer")
 */
private $quality;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\GeospatialPoints", mappedBy="dataset")
     */
    private $geLocations;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\WorkUnit", inversedBy="datasets")
     */
    private $workunit;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\DatasetFormat", inversedBy="datasets")
     */
    private $format;

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
     private $funding;

     /**
      * @ORM\Column(type="string", length=255, nullable=true)
      */



    /**
     * @ORM\OneToMany(targetEntity="App\Entity\DatasetAttachment", mappedBy="dataset")
     */
    private $datasetAttachments;


    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Tag", mappedBy="dataset")
     */
    private $tags;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\DownloadRequest", mappedBy="Dataset")
     */
    private $downloadRequests;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\FosUser", inversedBy="datasets")
     */
    private $owner;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Study", inversedBy="datasets")
     */
    private $study;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $CreatedAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $UpdatedAt;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $approved;

    /**
     * @ORM\Column(type="integer")
     */
    private $request_count;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isRestricted;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $DescriptionOfRestriction;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\StudyDatasetLinkRequest", mappedBy="dataset")
     */
    private $studyDatasetLinkRequests;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isExternal;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ExternalLink;





    public function __construct()
    {
        $this->geLocations = new ArrayCollection();
        $this->datasetAttachments = new ArrayCollection();
        $this->tags = new ArrayCollection();
        $this->downloadRequests = new ArrayCollection();
        $this->owner = new ArrayCollection();
        $this->study = new ArrayCollection();
        $this->studyDatasetLinkRequests = new ArrayCollection();
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


    public function getCoverageLocation(): ?string
    {
        return $this->coverageLocation;
    }

    public function setCoverageLocation(string $coverageLocation): self
    {
        $this->coverageLocation = $coverageLocation;

        return $this;
    }

    public function getCoverageAge(): ?int
    {
        return $this->coverageAge;
    }

    public function setCoverageAge(int $coverageAge): self
    {
        $this->coverageAge = $coverageAge;

        return $this;
    }

    public function getCoverageSex(): ?string
    {
        return $this->coverageSex;
    }

    public function setCoverageSex(string $coverageSex): self
    {
        $this->coverageSex = $coverageSex;

        return $this;
    }

    public function getPublished(): ?bool
    {
        return $this->published;
    }

    public function setPublished(bool $published): self
    {
        $this->published = $published;

        return $this;
    }
    public function getQualityassessment(): ?bool
    {
        return $this->qualityassessment;
    }

    public function setQualityassessment(bool $qualityassessment): self
    {
        $this->qualityassessment = $qualityassessment;

        return $this;
    }
    public function getCodeBook(): ?bool
    {
        return $this->codeBook;
    }

    public function setCodeBook(bool $codeBook): self
    {
        $this->codeBook = $codeBook;

        return $this;
    }


    public function getCodeBookFileName(): ?string
    {
        return $this->codeBookFileName;
    }

    public function setCodeBookFileName(string $codeBookFileName): self
    {
        $this->codeBookFileName = $codeBookFileName;

        return $this;
    }

    public function getProposal(): ?string
    {
        return $this->proposal;
    }

    public function setProposal(string $proposal): self
    {
        $this->proposal = $proposal;

        return $this;
    }

    public function getEthicalclearance(): ?string
    {
        return $this->ethicalclearance;
    }

    public function setEthicalclearance(string $ethicalclearance): self
    {
        $this->ethicalclearance = $ethicalclearance;

        return $this;
    }
    public function getOtherfile(): ?string
    {
        return $this->otherfile;
    }

    public function setOtherfile(string $otherfile): self
    {
        $this->otherfile = $otherfile;

        return $this;
    }
    public function getGenerating(): ?string
    {
        return $this->generating;
    }

    public function setGenerating(string $generating): self
    {
        $this->generating = $generating;

        return $this;
    }




    public function getRecommended(): ?string
    {
        return $this->recommended;
    }

    public function setRecommended(string $recommended): self
    {
        $this->recommended = $recommended;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getCleaned(): ?bool
    {
        return $this->cleaned;
    }

    public function setCleaned(bool $cleaned): self
    {
        $this->cleaned = $cleaned;

        return $this;
    }

    public function getCleanedFormat(): ?string
    {
        return $this->cleanedFormat;
    }

    public function setCleanedFormat( $cleanedFormat): self
    {
        $this->cleanedFormat = $cleanedFormat;

        return $this;
    }

    public function getRawFormat(): ?string
    {
        return $this->rawFormat;
    }

    public function setRawFormat(string $rawFormat): self
    {
        $this->rawFormat = $rawFormat;

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

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(string $remark): self
    {
        $this->remark = $remark;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(string $note): self
    {
        $this->note = $note;

        return $this;
    }



    public function getTreatment(): ?string
    {
        return $this->treatment;
    }

    public function setTreatment(string $treatment): self
    {
        $this->treatment = $treatment;

        return $this;
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

    public function getPublicationYear(): ?\DateTimeInterface
    {
        return $this->publicationYear;
    }

    public function setPublicationYear(\DateTimeInterface $publicationYear): self
    {
        $this->publicationYear = $publicationYear;

        return $this;
    }

    public function getSugestedCitation(): ?string
    {
        return $this->sugestedCitation;
    }

    public function setSugestedCitation(string $sugestedCitation): self
    {
        $this->sugestedCitation = $sugestedCitation;

        return $this;
    }

    public function getOtherIdType(): ?string
    {
        return $this->otherIdType;
    }

    public function setOtherIdType(string $otherIdType): self
    {
        $this->otherIdType = $otherIdType;

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

    public function getAbstract(): ?string
    {
        return $this->abstract;
    }

    public function setAbstract(string $abstract): self
    {
        $this->abstract = $abstract;

        return $this;
    }


    public function getRecievedDate(): ?\DateTimeInterface
    {
        return $this->recievedDate;
    }

    public function setRecievedDate(\DateTimeInterface $recievedDate): self
    {
        $this->recievedDate = $recievedDate;

        return $this;
    }

    public function getCatalogCompletedDate(): ?\DateTimeInterface
    {
        return $this->catalogCompletedDate;
    }

    public function setCatalogCompletedDate(\DateTimeInterface $catalogCompletedDate): self
    {
        $this->catalogCompletedDate = $catalogCompletedDate;

        return $this;
    }


    public function getConfidentiality(): ?Confidentiality
    {
        return $this->confidentiality;
    }

    public function setConfidentiality(?Confidentiality $confidentiality): self
    {
        $this->confidentiality = $confidentiality;

        return $this;
    }

    public function getStudyDesign(): ?StudyDesign
    {
        return $this->studyDesign;
    }

    public function setStudyDesign(?StudyDesign $studyDesign): self
    {
        $this->studyDesign = $studyDesign;

        return $this;
    }

    public function getCoverageType(): ?CoverageType
    {
        return $this->coverageType;
    }

    public function setCoverageType(?CoverageType $coverageType): self
    {
        $this->coverageType = $coverageType;

        return $this;
    }

    public function getDatasetCategory(): ?DatasetCategory
    {
        return $this->datasetCategory;
    }

    public function setDatasetCategory(?DatasetCategory $datasetCategory): self
    {
        $this->datasetCategory = $datasetCategory;

        return $this;
    }


    public function getGeospatial(): ?Geospatial
    {
        return $this->geospatial;
    }

    public function setGeospatial(?Geospatial $geospatial): self
    {
        $this->geospatial = $geospatial;

        return $this;
    }

    public function getMicrodataTabulationStatus(): ?MicrodataTabulationStatus
    {
        return $this->microdataTabulationStatus;
    }

    public function setMicrodataTabulationStatus(?MicrodataTabulationStatus $microdataTabulationStatus): self
    {
        $this->microdataTabulationStatus = $microdataTabulationStatus;

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

    public function getFunding(): ?string
    {
        return $this->PIEmail;
    }

    public function setFunding(?string $PIEmail): self
    {
        $this->PIEmail = $PIEmail;

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

    public function getRecordType(): ?RecordType
    {
        return $this->recordType;
    }

    public function setRecordType(?RecordType $recordType): self
    {
        $this->recordType = $recordType;

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

    public function getFileUrl(): ?string
    {
        return $this->FileUrl;
    }

    public function setFileUrl(?string $FileUrl): self
    {
        $this->FileUrl = $FileUrl;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->Status;
    }

    public function setStatus(?bool $Status): self
    {
        $this->Status = $Status;

        return $this;
    }
    public function getQuality(): ?int
    {
        return $this->quality;
    }

    public function setQuality(?int $quality): self
    {
        $this->quality = $quality;

        return $this;
    }
    public function getDownloadCount(): ?int
    {
        return $this->downloadCount;
    }

    public function setDownloadCount(?int $downloadCount): self
    {
        $this->downloadCount = $downloadCount;

        return $this;
    }

    /**
     * @return Collection|GeospatialPoints[]
     */
    public function getGeLocations(): Collection
    {
        return $this->geLocations;
    }

    public function addGeLocation(GeospatialPoints $geLocation): self
    {
        if (!$this->geLocations->contains($geLocation)) {
            $this->geLocations[] = $geLocation;
            $geLocation->setDataset($this);
        }

        return $this;
    }

    public function removeGeLocation(GeospatialPoints $geLocation): self
    {
        if ($this->geLocations->contains($geLocation)) {
            $this->geLocations->removeElement($geLocation);
            // set the owning side to null (unless already changed)
            if ($geLocation->getDataset() === $this) {
                $geLocation->setDataset(null);
            }
        }

        return $this;
    }

    public function getWorkunit(): ?WorkUnit
    {
        return $this->workunit;
    }

    public function setWorkunit(?WorkUnit $workunit): self
    {
        $this->workunit = $workunit;

        return $this;
    }

    public function getFormat(): ?DatasetFormat
    {
        return $this->format;
    }

    public function setFormat(?DatasetFormat $format): self
    {
        $this->format = $format;

        return $this;
    }

    /**
     * @return Collection|DatasetAttachment[]
     */
    public function getDatasetAttachments(): Collection
    {
        return $this->datasetAttachments;
    }

    public function addDatasetAttachment(DatasetAttachment $datasetAttachment): self
    {
        if (!$this->datasetAttachments->contains($datasetAttachment)) {
            $this->datasetAttachments[] = $datasetAttachment;
            $datasetAttachment->setDataset($this);
        }

        return $this;
    }

    public function removeDatasetAttachment(DatasetAttachment $datasetAttachment): self
    {
        if ($this->datasetAttachments->contains($datasetAttachment)) {
            $this->datasetAttachments->removeElement($datasetAttachment);
            // set the owning side to null (unless already changed)
            if ($datasetAttachment->getDataset() === $this) {
                $datasetAttachment->setDataset(null);
            }
        }

        return $this;
    }


    public function getKeywords(): ?array
    {
        return $this->keywords;
    }

    public function setKeywords(?array $keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * @return Collection|Tag[]
     */
    public function getTags(): Collection
    {
        return $this->tags;
    }

    public function addTag(Tag $tag): self
    {
        if (!$this->tags->contains($tag)) {
            $this->tags[] = $tag;
            $tag->addDataset($this);
        }

        return $this;
    }

    public function removeTag(Tag $tag): self
    {
        if ($this->tags->contains($tag)) {
            $this->tags->removeElement($tag);
            $tag->removeDataset($this);
        }

        return $this;
    }

    /**
     * @return Collection|DownloadRequest[]
     */
    public function getDownloadRequests(): Collection
    {
        return $this->downloadRequests;
    }

    public function addDownloadRequest(DownloadRequest $downloadRequest): self
    {
        if (!$this->downloadRequests->contains($downloadRequest)) {
            $this->downloadRequests[] = $downloadRequest;
            $downloadRequest->setDataset($this);
        }

        return $this;
    }

    public function removeDownloadRequest(DownloadRequest $downloadRequest): self
    {
        if ($this->downloadRequests->contains($downloadRequest)) {
            $this->downloadRequests->removeElement($downloadRequest);
            // set the owning side to null (unless already changed)
            if ($downloadRequest->getDataset() === $this) {
                $downloadRequest->setDataset(null);
            }
        }

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

    public function getTimePeriodCoverageStart(): ?\DateTimeInterface
    {
        return $this->timePeriodCoverageStart;
    }

    public function setTimePeriodCoverageStart( ?\DateTimeInterface $timePeriodCoverageStart): self
    {
        $this->timePeriodCoverageStart = $timePeriodCoverageStart;

        return $this;
    }

    public function getTimePeriodCoverageEnd(): ?\DateTimeInterface
    {
        return $this->timePeriodCoverageEnd;
    }

    public function setTimePeriodCoverageEnd( ?\DateTimeInterface $timePeriodCoverageEnd): self
    {
        $this->timePeriodCoverageEnd = $timePeriodCoverageEnd;

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

    public function getApproved(): ?int
    {
        return $this->approved;
    }

    public function setApproved(?int $approved): self
    {
        $this->approved = $approved;

        return $this;
    }

    public function getRequestCount(): ?int
    {
        return $this->request_count;
    }

    public function setRequestCount(int $request_count): self
    {
        $this->request_count = $request_count;

        return $this;
    }

    public function getIsRestricted(): ?bool
    {
        return $this->isRestricted;
    }

    public function setIsRestricted(bool $isRestricted): self
    {
        $this->isRestricted = $isRestricted;

        return $this;
    }

    public function getDescriptionOfRestriction(): ?string
    {
        return $this->DescriptionOfRestriction;
    }

    public function setDescriptionOfRestriction(?string $DescriptionOfRestriction): self
    {
        $this->DescriptionOfRestriction = $DescriptionOfRestriction;

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
            $studyDatasetLinkRequest->setDataset($this);
        }

        return $this;
    }

    public function removeStudyDatasetLinkRequest(StudyDatasetLinkRequest $studyDatasetLinkRequest): self
    {
        if ($this->studyDatasetLinkRequests->contains($studyDatasetLinkRequest)) {
            $this->studyDatasetLinkRequests->removeElement($studyDatasetLinkRequest);
            // set the owning side to null (unless already changed)
            if ($studyDatasetLinkRequest->getDataset() === $this) {
                $studyDatasetLinkRequest->setDataset(null);
            }
        }

        return $this;
    }

    public function getIsExternal(): ?bool
    {
        return $this->isExternal;
    }

    public function setIsExternal(bool $isExternal): self
    {
        $this->isExternal = $isExternal;

        return $this;
    }

    public function getExternalLink(): ?string
    {
        return $this->ExternalLink;
    }

    public function setExternalLink(?string $ExternalLink): self
    {
        $this->ExternalLink = $ExternalLink;

        return $this;
    }




}
