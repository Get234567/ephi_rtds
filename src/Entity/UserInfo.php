<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserInfoRepository")
 */
class UserInfo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\FosUser", inversedBy="userInfo", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $User;

 

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $Sex;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $Address;



    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="datetime")
     */
    private $registrationDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $FirstName;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LastName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $MiddleName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Affiliation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $EducationLevel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $WorKAt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $position;

  



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?FosUser
    {
        return $this->User;
    }

    public function setUser(FosUser $User): self
    {
        $this->User = $User;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->FirstName." ".$this->MiddleName." ".$this->LastName;
    }

   

    public function getSex(): ?string
    {
        return $this->Sex;
    }

    public function setSex(string $Sex): self
    {
        $this->Sex = $Sex;

        return $this;
    }
    public function __toString()
    {
        return $this->FirstName." ".$this->MiddleName." ".$this->LastName;
    }

    public function getAddress(): ?string
    {
        return $this->Address;
    }

    public function setAddress(string $Address): self
    {
        $this->Address = $Address;

        return $this;
    }



    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getRegistrationDate(): ?\DateTimeInterface
    {
        return $this->registrationDate;
    }

    public function setRegistrationDate(\DateTimeInterface $registrationDate): self
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    public function setFirstName(string $FirstName): self
    {
        $this->FirstName = $FirstName;

        return $this;
    }

  

    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    public function setLastName(string $LastName): self
    {
        $this->LastName = $LastName;

        return $this;
    }

    public function getMiddleName(): ?string
    {
        return $this->MiddleName;
    }

    public function setMiddleName(?string $MiddleName): self
    {
        $this->MiddleName = $MiddleName;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getAffiliation(): ?string
    {
        return $this->Affiliation;
    }

    public function setAffiliation(?string $Affiliation): self
    {
        $this->Affiliation = $Affiliation;

        return $this;
    }

    public function getEducationLevel(): ?string
    {
        return $this->EducationLevel;
    }

    public function setEducationLevel(?string $EducationLevel): self
    {
        $this->EducationLevel = $EducationLevel;

        return $this;
    }

    public function getWorKAt(): ?string
    {
        return $this->WorKAt;
    }

    public function setWorKAt(?string $WorKAt): self
    {
        $this->WorKAt = $WorKAt;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): self
    {
        $this->position = $position;

        return $this;
    }

    

   

  

  
}
