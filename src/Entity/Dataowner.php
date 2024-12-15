<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dataowner
 *
 * @ORM\Table(name="data_owner")
 * @ORM\Entity(repositoryClass="App\Repository\DataownerRepository")
 */
class Dataowner
{
  public function __toString()
  {
      return $this->unit;
  }

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */

    private $owner_id;


     /**
       * @var \Dataowner
       *
       * @ORM\ManyToOne(targetEntity="Dataowner")
       * @ORM\JoinColumns({
       *   @ORM\JoinColumn(name="Parent_id", referencedColumnName="id")
       * })
       */
    private $parent_id;


    /**
    * @var string
    *
     * @ORM\Column(name="unit",type="string", length=255, nullable=true)
     */
    private $unit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOwnerId(): ?int
    {
        return $this->owner_id;
    }

    public function setOwnerId(int $owner_id): self
    {
        $this->owner_id = $owner_id;

        return $this;
    }

    public function getParentID(): ?Dataowner
    {
        return $this->parent_id;
    }

    public function setParentID(?Dataowner $parent_id): self
    {
        $this->parent_id = $parent_id;

        return $this;
    }


    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function setUnit(?string $unit): self
    {
        $this->unit = $unit;

        return $this;
    }
}
