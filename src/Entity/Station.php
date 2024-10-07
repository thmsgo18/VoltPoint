<?php

declare(strict_types=1);

namespace App\Entity;
use App\Repository\StationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\Criteria;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity(repositoryClass: StationRepository::class)]
class Station
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
    #[ORM\Column(type: 'uuid')]
    private string $id;

    #[ORM\Column(length: 255)]
    private string $name;

    #[ORM\Column(type: Types::DECIMAL, precision: 8, scale: 6)]
    private string $latitude;

    #[ORM\Column(type: Types::DECIMAL, precision: 9, scale: 6)]
    private string $longitude;

    #[ORM\OneToMany(targetEntity: Evse::class, mappedBy: 'station')]
    private Collection $evses;

    #[ORM\Column(length: 255)]
    private string $city;

    #[ORM\Column]
    private int $postal;

    #[ORM\Column(length: 255)]
    private string $street;

    #[ORM\Column]
    private float $prix;

    public function __construct()
    {
        $this->evses = new ArrayCollection();
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(string $latitude): void //static
    {
        $this->latitude = $latitude;

        //return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(string $longitude): void //static
    {
        $this->longitude = $longitude;

        //return $this;
    }

    /**
     * @return Collection<int, Evse>
     */
    public function getEvses(): Collection
    {
        return $this->evses;
    }

    public function addEvse(Evse $evse): static
    {
        if (!$this->evses->contains($evse)) {
            $this->evses->add($evse);
            $evse->setStation($this);
        }

        return $this;
    }

    public function removeEvse(Evse $evse): static
    {
        if ($this->evses->removeElement($evse)) {
            // set the owning side to null (unless already changed)
            if ($evse->getStation() === $this) {
                $evse->setStation(null);
            }
        }

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getPostal(): ?int
    {
        return $this->postal;
    }

    public function setPostal(int $postal): static
    {
        $this->postal = $postal;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(string $street): static
    {
        $this->street = $street;

        return $this;
    }

    public function hasDispo(): int
    {
        $criteria = Criteria::create()
            ->andWhere(Criteria::expr()->eq('disponibility', 1));

        return $this->evses->matching($criteria)->count();
    }
    public function serialize(): string
    {
        return serialize(array(
            $this->name,
            $this->city,
            $this->street,
            $this->latitude,
            $this->longitude,
            $this->id->toString(),
            $this->postal,
            $this->evses,
            $this->prix,
        ));
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }
}