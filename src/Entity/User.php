<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
    #[ORM\Column(type: 'uuid')]
    private string $id;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    private string $email;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column(type: 'json')]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column(type: 'string')]
    private string $password;

    #[ORM\OneToMany(targetEntity: RechargeSession::class, mappedBy: 'user')]
    private Collection $rechargeSessions;

    #[ORM\Column(length: 255)]
    private string $name;

    #[ORM\Column(length: 255)]
    private string $lastname;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $favPrise = null;

    public function __construct()
    {
        $this->rechargeSessions = new ArrayCollection();
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     *
     * @return list<string>
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * @param list<string> $roles
     */
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    public function setUserRole(): void
    {
        $this->roles = ['ROLE_USER'];
    }

    public function setAdminRole(): void
    {
        $this->roles = ['ROLE_USER', 'ROLE_ADMIN'];
    }

    public function isAdmin(): bool
    {
        return in_array('ROLE_ADMIN', $this->roles);
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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
            $rechargeSession->setUser($this);
        }

        return $this;
    }

    public function removeRechargeSession(RechargeSession $rechargeSession): static
    {
        if ($this->rechargeSessions->removeElement($rechargeSession)) {
            // set the owning side to null (unless already changed)
            if ($rechargeSession->getUser() === $this) {
                $rechargeSession->setUser(null);
            }
        }

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getFavPrise(): ?string
    {
        return $this->favPrise;
    }

    public function setFavPrise(?string $favPrise): static
    {
        $this->favPrise = $favPrise;

        return $this;
    }
}
