<?php

namespace App\Data;

use App\Entity\Connector;

class UserFilter
{
    private bool $dispo = false;
    private string $city = '';
    private ?Connector $connector = null;
    private bool $favPrise = false;

    public function setDispo(bool $dispo): static {
        $this->dispo = $dispo;
        return $this;
    }
    public function getDispo(): bool {
        return $this->dispo;
    }
    public function setCity(string $city): static {
        $this->city = $city;
        return $this;
    }
    public function getCity(): ?string {
        return $this->city;
    }
    public function setConnector(Connector $connector): static {
        $this->connector = $connector;
        return $this;
    }
    public function getConnector(): ?Connector {
        return $this->connector;
    }

    public function setFavPrise(bool $prise): static {
        $this->favPrise = $prise;
        return $this;
    }
    public function getFavPrise(): bool {
        return $this->favPrise;
    }
}