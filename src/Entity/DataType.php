<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DataTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ApiResource]
#[ORM\Entity(repositoryClass: DataTypeRepository::class)]
class DataType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 190)]
    private ?string $name = null;

    #[ORM\Column(length: 10)]
    private ?string $unit = null;

    #[ORM\OneToMany(mappedBy: 'dataType', targetEntity: Sensor::class)]
    private Collection $sensor;

    public function __construct()
    {
        $this->sensor = new ArrayCollection();
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

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function setUnit(string $unit): self
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * @return Collection<int, Sensor>
     */
    public function getSensor(): Collection
    {
        return $this->sensor;
    }

    public function addSensor(Sensor $sensor): self
    {
        if (!$this->sensor->contains($sensor)) {
            $this->sensor->add($sensor);
            $sensor->setDataType($this);
        }

        return $this;
    }

    public function removeSensor(Sensor $sensor): self
    {
        if ($this->sensor->removeElement($sensor)) {
            // set the owning side to null (unless already changed)
            if ($sensor->getDataType() === $this) {
                $sensor->setDataType(null);
            }
        }

        return $this;
    }
}
