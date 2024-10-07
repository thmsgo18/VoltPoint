<?php

namespace App\Entity;

use App\Entity\SessionStatus\Status;
use App\Repository\RechargeSessionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Types\UuidType;
use Symfony\Component\Uid\Uuid;

#[ORM\Entity(repositoryClass: RechargeSessionRepository::class)]
class RechargeSession
{
    #[ORM\Id]
    #[ORM\Column(type: UuidType::NAME, unique: true)]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
    private Uuid $id;

    #[ORM\Column(nullable: true)]
    private ?float $price = null;

    #[ORM\ManyToOne(inversedBy: 'rechargeSessions')]
    #[ORM\JoinColumn(nullable: false)]
    private User $user;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private \DateTimeImmutable $createdAt;


    #[ORM\ManyToOne(inversedBy: 'rechargeSessions')]
    #[ORM\JoinColumn(nullable: false)]
    private Evse $evse;

    #[ORM\Column(type: "string", enumType: Status::class)]
    private Status $status;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $stoped_at = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->status = Status::InProgress;
    }

    public function getId(): Uuid
    {
        return $this->id;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getEvse(): Evse
    {
        return $this->evse;
    }

    public function setEvse(Evse $evse): static
    {
        $this->evse = $evse;

        return $this;
    }

    public function getStatus(): Status
    {
        return $this->status;
    }

    public function setStatus(Status $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function isStopped(): bool
    {
        return $this->status == Status::Stopped;
    }

    public function isInProgress(): bool
    {
        return $this->status == Status::InProgress;
    }

    public function isPaused(): bool
    {
        return $this->status == Status::Paused;
    }

    public function getStopedAt(): ?\DateTimeImmutable
    {
        return $this->stoped_at;
    }

    public function setStopedAt(?\DateTimeImmutable $stoped_at): static
    {
        $this->stoped_at = $stoped_at;

        return $this;
    }
}
