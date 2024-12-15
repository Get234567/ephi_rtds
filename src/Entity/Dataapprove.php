<?php

namespace App\Entity;
use App\Form\DataapproveType;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DataapproveRepository")
 */
class Dataapprove
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $user_id;

    /**
     * @var \WorkUnit
     *
     * @ORM\ManyToOne(targetEntity="WorkUnit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="work_unit_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $work_unit_id;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getUserId(): ?FosUser

    {
        return $this->user_id;
    }

    public function setUserId(?FosUser $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getWorkUnitId(): ?WorkUnit
    {
        return $this->work_unit_id;
    }

    public function setWorkUnitId(?WorkUnit $work_unit_id): self
    {
        $this->work_unit_id = $work_unit_id;

        return $this;
    }
}
