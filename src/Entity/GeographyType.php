<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GeographyTypeRepository")
 */
class GeographyType
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $geography_type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGeographyType(): ?string
    {
        return $this->geography_type;
    }

    public function setGeographyType(?string $geography_type): self
    {
        $this->geography_type = $geography_type;

        return $this;
    }
}
