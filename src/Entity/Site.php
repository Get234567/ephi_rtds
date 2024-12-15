<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SiteRepository")
 */
class Site
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $CopyrightNotice;

    /**
     * @ORM\Column(type="text")
     */
    private $Mission;

    /**
     * @ORM\Column(type="text")
     */
    private $Vision;

    /**
     * @ORM\Column(type="text")
     */
    private $Objective;

    /**
     * @ORM\Column(type="text")
     */
    private $Help;

    /**
     * @ORM\Column(type="text")
     */
    private $ContactUs;

    /**
     * @ORM\Column(type="text")
     */
    private $AboutUs;

    /**
     * @ORM\Column(type="text")
     */
    private $SiteName;

    /**
     * @ORM\Column(type="text")
     */
    private $Moto;

    /**
     * @ORM\Column(type="integer")
     */
    private $visit_count;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $termsOfReference;

    /**
     * @ORM\Column(type="text")
     */
    private $emailMessage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCopyrightNotice(): ?string
    {
        return $this->CopyrightNotice;
    }

    public function setCopyrightNotice(string $CopyrightNotice): self
    {
        $this->CopyrightNotice = $CopyrightNotice;

        return $this;
    }

    public function getMission(): ?string
    {
        return $this->Mission;
    }

    public function setMission(string $Mission): self
    {
        $this->Mission = $Mission;

        return $this;
    }

    public function getVision(): ?string
    {
        return $this->Vision;
    }

    public function setVision(string $Vision): self
    {
        $this->Vision = $Vision;

        return $this;
    }

    public function getObjective(): ?string
    {
        return $this->Objective;
    }

    public function setObjective(string $Objective): self
    {
        $this->Objective = $Objective;

        return $this;
    }

    public function getHelp(): ?string
    {
        return $this->Help;
    }

    public function setHelp(string $Help): self
    {
        $this->Help = $Help;

        return $this;
    }

    public function getContactUs(): ?string
    {
        return $this->ContactUs;
    }

    public function setContactUs(string $ContactUs): self
    {
        $this->ContactUs = $ContactUs;

        return $this;
    }

    public function getAboutUs(): ?string
    {
        return $this->AboutUs;
    }

    public function setAboutUs(string $AboutUs): self
    {
        $this->AboutUs = $AboutUs;

        return $this;
    }

    public function getSiteName(): ?string
    {
        return $this->SiteName;
    }

    public function setSiteName(string $SiteName): self
    {
        $this->SiteName = $SiteName;

        return $this;
    }

    public function getMoto(): ?string
    {
        return $this->Moto;
    }

    public function setMoto(string $Moto): self
    {
        $this->Moto = $Moto;

        return $this;
    }

    public function getVisitCount(): ?int
    {
        return $this->visit_count;
    }

    public function setVisitCount(int $visit_count): self
    {
        $this->visit_count = $visit_count;

        return $this;
    }

    public function getTermsOfReference(): ?string
    {
        return $this->termsOfReference;
    }

    public function setTermsOfReference(?string $termsOfReference): self
    {
        $this->termsOfReference = $termsOfReference;

        return $this;
    }

    public function getEmailMessage(): ?string
    {
        return $this->emailMessage;
    }

    public function setEmailMessage(string $emailMessage): self
    {
        $this->emailMessage = $emailMessage;

        return $this;
    }
}
