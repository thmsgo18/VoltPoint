<?php

namespace App\Data;

class AdminSessionFilter
{
    private string $city = '';
    private string $street = '';
    private string $station = '';
    private string $id = '';
    private string $username = '';
    private string $userlastname = '';

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
    public function setUsername(string $user): static {
        $this->username = $user;
        return $this;
    }
    public function getUsername(): string {
        return $this->username;
    }
    public function setUserlastname(string $user): static {
        $this->userlastname = $user;
        return $this;
    }
    public function getUserlastname(): string {
        return $this->userlastname;
    }
    public function setId(string $id): static {
        $this->id = $id;
        return $this;
    }
    public function getId(): string {
        return $this->id;
    }
    public function setStation(string $station): static {
        $this->station = $station;
        return $this;
    }
    public function getStation(): string {
        return $this->station;
    }
}