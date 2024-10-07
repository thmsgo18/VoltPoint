<?php

namespace App\Data;

class AdminStationFilter
{
    private string $city = '';
    private int $postal = 0;
    private string $street = '';
    private string $name = '';
    private string $id = '';

    public function setCity(string $city): static {
        $this->city = $city;
        return $this;
    }
    public function getCity(): string {
        return $this->city;
    }
    public function setStreet(string $street): static {
        $this->street = $street;
        return $this;
    }
    public function getStreet(): string {
        return $this->street;
    }
    public function setName(string $name): static {
        $this->name = $name;
        return $this;
    }
    public function getName(): string {
        return $this->name;
    }
    public function setId(string $id): static {
        $this->id = $id;
        return $this;
    }
    public function getId(): string {
        return $this->id;
    }
    public function setPostal(int $postal): static {
        $this->postal = $postal;
        return $this;
    }
    public function getPostal(): int {
        return $this->postal;
    }
}