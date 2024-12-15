<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectParentProject
 *
 * @ORM\Table(name="project_parent_project", indexes={@ORM\Index(name="parent_project_id", columns={"parent_project_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProjectParentProjectRepository")
 */
class ProjectParentProject
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
     * @var int
     *
     * @ORM\Column(name="project_id", type="integer", nullable=false)
     */
    private $projectId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var \Study
     *
     * @ORM\ManyToOne(targetEntity="Study")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_project_id", referencedColumnName="id")
     * })
     */
    private $parentProject;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    public function setProjectId(int $projectId): self
    {
        $this->projectId = $projectId;

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

    public function getParentProject(): ?Study
    {
        return $this->parentProject;
    }

    public function setParentProject(?Study $parentProject): self
    {
        $this->parentProject = $parentProject;

        return $this;
    }


}
