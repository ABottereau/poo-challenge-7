<?php

class Personne
{
    public string $lastName;
    public string $firstName;
    public string $adresse;
    public DateTimeImmutable $birthDate;

    public function __construct(string $lastName, string $firstName, string $adresse, string $datePersonnalisée)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->adresse = $adresse;
        $this->birthDate = new DateTimeImmutable($datePersonnalisée);
    }

    public function getInfos(): string {
        return 'Nom : ' . $this->lastName . '<br>' 
            . 'Prénom : ' . $this->firstName . '<br>' 
            . 'Adresse : ' . $this->adresse . '<br>' 
            . 'Date de naissance : ' . $this->birthDate->format('d/m/Y') . '<br>';
    }

    public function setAdresse(string $adresse): void {
        $this->adresse = $adresse;
    }

    public function getAge(): int {
        $today = new DateTimeImmutable();
        $difference = $this->birthDate->diff($today);
        return $difference->y;
    }
}