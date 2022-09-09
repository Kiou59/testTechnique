<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\SensorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ApiResource]
#[ORM\Entity(repositoryClass: SensorRepository::class)]
class Sensor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $valueMin = null;

    #[ORM\Column]
    private ?int $valueMax = null;

    #[ORM\ManyToOne(inversedBy: 'sensor')]
    #[ORM\JoinColumn(nullable: false)]
    private ?DataType $dataType = null;

    #[ORM\ManyToOne(inversedBy: 'sensors')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Module $module = null;

    #[ORM\OneToMany(mappedBy: 'sensor', targetEntity: History::class)]
    private Collection $histories;

    public function __construct()
    {
        $this->histories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValueMin(): ?int
    {
        return $this->valueMin;
    }

    public function setValueMin(int $valueMin): self
    {
        $this->valueMin = $valueMin;

        return $this;
    }

    public function getValueMax(): ?int
    {
        return $this->valueMax;
    }

    public function setValueMax(int $valueMax): self
    {
        $this->valueMax = $valueMax;

        return $this;
    }

    public function getDataType(): ?DataType
    {
        return $this->dataType;
    }

    public function setDataType(?DataType $dataType): self
    {
        $this->dataType = $dataType;

        return $this;
    }

    public function getModule(): ?Module
    {
        return $this->module;
    }

    public function setModule(?Module $module): self
    {
        $this->module = $module;

        return $this;
    }

    /**
     * @return Collection<int, History>
     */
    public function getHistories(): Collection
    {
        return $this->histories;
    }

    public function addHistory(History $history): self
    {
        if (!$this->histories->contains($history)) {
            $this->histories->add($history);
            $history->setSensor($this);
        }

        return $this;
    }

    public function removeHistory(History $history): self
    {
        if ($this->histories->removeElement($history)) {
            // set the owning side to null (unless already changed)
            if ($history->getSensor() === $this) {
                $history->setSensor(null);
            }
        }

        return $this;
    }
}
