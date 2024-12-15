<?php

namespace App\Entity;
use App\Form\DatapercentageType;
use Doctrine\ORM\Mapping as ORM;

/**
*
 *
 *
* @ORM\Table(name="datapercentage")
 * @ORM\Entity(repositoryClass="App\Repository\DatapercentageRepository")
 */
class Datapercentage
{

  public function __toString()
  {
      return $this->percentage;
  }
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var \Dataowner
     *
     * @ORM\ManyToOne(targetEntity="Dataowner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="owner_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $owner_id;


     /**
     * @var string
     *
      * @ORM\Column(name="percentage",type="string", length=255, nullable=true)
      */
    private $percentage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOwnerId(): ?Dataowner
    {
        return $this->owner_id;
    }

    public function setOwnerId(?Dataowner $owner_id): self
    {
        $this->owner_id = $owner_id;

        return $this;
    }

    public function getPercentage(): ?float
    {
        return $this->percentage;
    }

    public function setPercentage(?float $percentage): self
    {
        $this->percentage = $percentage;

        return $this;
    }
}
