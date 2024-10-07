<?php

namespace App\Entity;

use App\Repository\EvseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EvseRepository::class)]
class Evse
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
    #[ORM\Column(type: 'uuid')]
    private string $id;

    #[ORM\ManyToOne(inversedBy: 'evses')]
    private Station $station;

    #[ORM\Column]
    private bool $disponibility;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(targetEntity: RechargeSession::class, mappedBy: 'evse')]
    private Collection $rechargeSessions;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $connector1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $connector2 = null;

    public function __construct()
    {
        $this->rechargeSessions = new ArrayCollection();
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getStation(): Station
    {
        return $this->station;
    }

    public function setStation(Station $station): static
    {
        $this->station = $station;

        return $this;
    }

    public function isDisponibility(): ?bool
    {
        return $this->disponibility;
    }

    public function setDisponibility(bool $disponibility): static
    {
        $this->disponibility = $disponibility;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, RechargeSession>
     */
    public function getRechargeSessions(): Collection
    {
        return $this->rechargeSessions;
    }

    public function addRechargeSession(RechargeSession $rechargeSession): static
    {
        if (!$this->rechargeSessions->contains($rechargeSession)) {
            $this->rechargeSessions->add($rechargeSession);
            $rechargeSession->setEvse($this);
        }

        return $this;
    }

    public function removeRechargeSession(RechargeSession $rechargeSession): static
    {
        if ($this->rechargeSessions->removeElement($rechargeSession)) {
            // set the owning side to null (unless already changed)
            if ($rechargeSession->getEvse() === $this) {
                $rechargeSession->setEvse(null);
            }
        }

        return $this;
    }

    public function getConnector1(): ?string
    {
        return $this->connector1;
    }

    public function setConnector1(?string $connector1): static
    {
        $this->connector1 = $connector1;

        return $this;
    }

    public function setConnector1FromEntity(Connector $connector1): static
    {
        $this->connector1 = $connector1->getName();

        return $this;
    }

    public function getConnector2(): ?string
    {
        return $this->connector2;
    }

    public function setConnector2FromEntity(Connector $connector2): static
    {
        $this->connector2 = $connector2->getName();

        return $this;
    }

    public function setConnector2(?string $connector2): static
    {
        $this->connector2 = $connector2;

        return $this;
    }
}
