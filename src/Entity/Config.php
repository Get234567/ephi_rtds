<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ConfigRepository")
 */
class Config
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

  

    /**
     * @ORM\Column(type="boolean",nullable=true)
     */
    private $user_can_register;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\UserGroup")
     */
    private $default_group;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $agrement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDeleteAudit(): ?string
    {
        return $this->delete_audit;
    }

    public function setDeleteAudit(string $delete_audit): self
    {
        $this->delete_audit = $delete_audit;

        return $this;
    }

    public function getUserCanRegister(): ?bool
    {
        return $this->user_can_register;
    }

    public function setUserCanRegister(bool $user_can_register): self
    {
        $this->user_can_register = $user_can_register;

        return $this;
    }

    public function getDefaultGroup(): ?UserGroup
    {
        return $this->default_group;
    }

    public function setDefaultGroup(?UserGroup $default_group): self
    {
        $this->default_group = $default_group;

        return $this;
    }

    public function getAgrement(): ?string
    {
        return $this->agrement;
    }

    public function setAgrement(?string $agrement): self
    {
        $this->agrement = $agrement;

        return $this;
    }
}
