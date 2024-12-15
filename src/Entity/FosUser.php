<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
/**
 * FosUser
 *
 * @ORM\Table(name="fos_user", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_957A6479A0D96FBF", columns={"email_canonical"}), @ORM\UniqueConstraint(name="UNIQ_957A647992FC23A8", columns={"username_canonical"}), @ORM\UniqueConstraint(name="UNIQ_957A6479C05FB297", columns={"confirmation_token"})})
 * @ORM\Entity
 */
class FosUser extends BaseUser

{




    protected $captchaCode;
    protected $FirstName;
    protected $MiddleName;
    protected $LastName;
    protected $Education;
    protected $Address;
    protected $phone;
    protected $Sex;
    protected $image;
    protected $Affiliation;

    public function getFirstName()
    {
      
        return $this->FirstName;
    }
    public function getAffiliation()
    {
      
        return $this->Affiliation;
    }

    public function getImage()
    {
        return $this->image;
    }
    public function getSex()
    {
        return $this->Sex;
    }
    
    public function getLastName()
    {
        return $this->LastName;
    }
    public function getMiddleName()
    {
        return $this->MiddleName;
    }
    public function getEducation()
    {
        return $this->Education;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getaddress()
    {
       return $this->Address;
    }
    public function setFirstName($s)
    {
       return $this->FirstName=$s;
    }
    public function setLastName($s)
    {
        return $this->LastName=$s;
    }
    public function setMiddleName($s)
    {
        return $this->MiddleName=$s;
    }
    public function setEducation($s)
    {
        return $this->Education=$s;
    }
    public function setPhone($s)
    {
        return $this->phone=$s;
    }
    public function setaddress($s)
    {
       return $this->Address=$s;
    }
    public function setSex($s)
    {
       return $this->Sex=$s;
    }
    public function setImage($s)
    {
       return $this->image=$s;
    }
    public function setAffiliation($s)
    {
       return $this->Affiliation=$s;
    }

    
    public function getCaptchaCode()
    {
      return $this->captchaCode;
    }

    public function setCaptchaCode($captchaCode)
    {
      $this->captchaCode = $captchaCode;
    }

    
    public function __toString()
    {
        return $this->username;
    }
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;



 

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ActivityLog", mappedBy="Sender")
     */
    private $activityLogs;
  /**
     * @ORM\OneToOne(targetEntity="App\Entity\UserInfo", mappedBy="User")
     */
   public $userInfo;

   

   /**
    * @ORM\ManyToOne(targetEntity="App\Entity\UserGroup")
    */
   private $userGroup;

   /**
    * @ORM\ManyToMany(targetEntity="App\Entity\Study", mappedBy="owner")
    * @ORM\OrderBy({"id" = "DESC"})
    */
   private $studies;

   /**
    * @ORM\ManyToMany(targetEntity="App\Entity\Dataset", mappedBy="owner")
    */
   private $datasets;

   /**
    * @ORM\OneToMany(targetEntity="App\Entity\JoinStudy", mappedBy="user", orphanRemoval=true)
    */
   private $joinStudies;

   /**
    * @ORM\OneToMany(targetEntity="App\Entity\StudyResearcher", mappedBy="user", orphanRemoval=true)
    */
   private $studyResearchers;

   /**
    * @ORM\OneToMany(targetEntity="App\Entity\Study", mappedBy="reviewer")
    */
   private $reviewerStudies;

   /**
    * @ORM\OneToMany(targetEntity="App\Entity\DownloadRequestApprover", mappedBy="approver")
    */
   private $downloadRequestApprovers;

   /**
    * @ORM\OneToMany(targetEntity="App\Entity\SaveQuery", mappedBy="savedBy")
    */
   private $saveQueries;

   /**
    * @ORM\OneToMany(targetEntity="App\Entity\StudyDatasetLinkRequest", mappedBy="requester")
    */
   private $studyDatasetLinkRequests;

   /**
    * @ORM\OneToMany(targetEntity="App\Entity\DownloadRequest", mappedBy="internalRequester")
    */
   private $downloadRequests;



   
    


    public function __construct()
    {
        parent::__construct();
        $this->activityLogs = new ArrayCollection();
        $this->studies = new ArrayCollection();
        $this->datasets = new ArrayCollection();
        $this->joinStudies = new ArrayCollection();
        $this->studyResearchers = new ArrayCollection();
        $this->reviewerStudies = new ArrayCollection();
        $this->downloadRequestApprovers = new ArrayCollection();
        $this->saveQueries = new ArrayCollection();
        $this->studyDatasetLinkRequests = new ArrayCollection();
        $this->downloadRequests = new ArrayCollection();
        // your own logic
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    /**
     * @return Collection|ActivityLog[]
     */
    public function getActivityLogs(): Collection
    {
        return $this->activityLogs;
    }
    public function getUserInfo(): ?UserInfo
    {
        return $this->userInfo;
    }
    
    public function setStudy(?UserInfo $user): self
    {
        $this->userInfo = $user;

        return $this;
    }

    public function addActivityLog(ActivityLog $activityLog): self
    {
        if (!$this->activityLogs->contains($activityLog)) {
            $this->activityLogs[] = $activityLog;
            $activityLog->setSender($this);
        }

        return $this;
    }


    public function removeActivityLog(ActivityLog $activityLog): self
    {
        if ($this->activityLogs->contains($activityLog)) {
            $this->activityLogs->removeElement($activityLog);
            // set the owning side to null (unless already changed)
            if ($activityLog->getSender() === $this) {
                $activityLog->setSender(null);
            }
        }

        return $this;
    }

   

  

    

  

   

    public function setUserInfo(?UserInfo $userInfo): self
    {
        $this->userInfo = $userInfo;

        // set (or unset) the owning side of the relation if necessary
        $newUser = $userInfo === null ? null : $this;
        if ($newUser !== $userInfo->getUser()) {
            $userInfo->setUser($newUser);
        }

        return $this;
    }

    public function getUserGroup(): ?UserGroup
    {
        return $this->userGroup;
    }

    public function setUserGroup(?UserGroup $userGroup): self
    {
        $this->userGroup = $userGroup;

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
            $study->addOwner($this);
        }

        return $this;
    }

    public function removeStudy(Study $study): self
    {
        if ($this->studies->contains($study)) {
            $this->studies->removeElement($study);
            $study->removeOwner($this);
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
            $dataset->addOwner($this);
        }

        return $this;
    }

    public function removeDataset(Dataset $dataset): self
    {
        if ($this->datasets->contains($dataset)) {
            $this->datasets->removeElement($dataset);
            $dataset->removeOwner($this);
        }

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
            $joinStudy->setUser($this);
        }

        return $this;
    }

    public function removeJoinStudy(JoinStudy $joinStudy): self
    {
        if ($this->joinStudies->contains($joinStudy)) {
            $this->joinStudies->removeElement($joinStudy);
            // set the owning side to null (unless already changed)
            if ($joinStudy->getUser() === $this) {
                $joinStudy->setUser(null);
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
            $studyResearcher->setUser($this);
        }

        return $this;
    }

    public function removeStudyResearcher(StudyResearcher $studyResearcher): self
    {
        if ($this->studyResearchers->contains($studyResearcher)) {
            $this->studyResearchers->removeElement($studyResearcher);
            // set the owning side to null (unless already changed)
            if ($studyResearcher->getUser() === $this) {
                $studyResearcher->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Study[]
     */
    public function getReviewerStudies(): Collection
    {
        return $this->reviewerStudies;
    }

    public function addReviewerStudy(Study $reviewerStudy): self
    {
        if (!$this->reviewerStudies->contains($reviewerStudy)) {
            $this->reviewerStudies[] = $reviewerStudy;
            $reviewerStudy->setReviewer($this);
        }

        return $this;
    }

    public function removeReviewerStudy(Study $reviewerStudy): self
    {
        if ($this->reviewerStudies->contains($reviewerStudy)) {
            $this->reviewerStudies->removeElement($reviewerStudy);
            // set the owning side to null (unless already changed)
            if ($reviewerStudy->getReviewer() === $this) {
                $reviewerStudy->setReviewer(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|DownloadRequestApprover[]
     */
    public function getDownloadRequestApprovers(): Collection
    {
        return $this->downloadRequestApprovers;
    }

    public function addDownloadRequestApprover(DownloadRequestApprover $downloadRequestApprover): self
    {
        if (!$this->downloadRequestApprovers->contains($downloadRequestApprover)) {
            $this->downloadRequestApprovers[] = $downloadRequestApprover;
            $downloadRequestApprover->setApprover($this);
        }

        return $this;
    }

    public function removeDownloadRequestApprover(DownloadRequestApprover $downloadRequestApprover): self
    {
        if ($this->downloadRequestApprovers->contains($downloadRequestApprover)) {
            $this->downloadRequestApprovers->removeElement($downloadRequestApprover);
            // set the owning side to null (unless already changed)
            if ($downloadRequestApprover->getApprover() === $this) {
                $downloadRequestApprover->setApprover(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|SaveQuery[]
     */
    public function getSaveQueries(): Collection
    {
        return $this->saveQueries;
    }

    public function addSaveQuery(SaveQuery $saveQuery): self
    {
        if (!$this->saveQueries->contains($saveQuery)) {
            $this->saveQueries[] = $saveQuery;
            $saveQuery->setSavedBy($this);
        }

        return $this;
    }

    public function removeSaveQuery(SaveQuery $saveQuery): self
    {
        if ($this->saveQueries->contains($saveQuery)) {
            $this->saveQueries->removeElement($saveQuery);
            // set the owning side to null (unless already changed)
            if ($saveQuery->getSavedBy() === $this) {
                $saveQuery->setSavedBy(null);
            }
        }

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
            $studyDatasetLinkRequest->setRequester($this);
        }

        return $this;
    }

    public function removeStudyDatasetLinkRequest(StudyDatasetLinkRequest $studyDatasetLinkRequest): self
    {
        if ($this->studyDatasetLinkRequests->contains($studyDatasetLinkRequest)) {
            $this->studyDatasetLinkRequests->removeElement($studyDatasetLinkRequest);
            // set the owning side to null (unless already changed)
            if ($studyDatasetLinkRequest->getRequester() === $this) {
                $studyDatasetLinkRequest->setRequester(null);
            }
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
            $downloadRequest->setInternalRequester($this);
        }

        return $this;
    }

    public function removeDownloadRequest(DownloadRequest $downloadRequest): self
    {
        if ($this->downloadRequests->contains($downloadRequest)) {
            $this->downloadRequests->removeElement($downloadRequest);
            // set the owning side to null (unless already changed)
            if ($downloadRequest->getInternalRequester() === $this) {
                $downloadRequest->setInternalRequester(null);
            }
        }

        return $this;
    }

  

}
