<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FactureRepository::class)]
class Facture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $utilisateur = null;

    #[ORM\Column(length: 255)]
    private ?string $DateFacture = null;

    #[ORM\Column(length: 255)]
    private ?string $NombreJoursTravail = null;

    #[ORM\Column(length: 255)]
    private ?string $PriceHours = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateur(): ?string
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(string $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getDateFacture(): ?string
    {
        return $this->DateFacture;
    }

    public function setDateFacture(string $DateFacture): self
    {
        $this->DateFacture = $DateFacture;

        return $this;
    }

    public function getNombreJoursTravail(): ?string
    {
        return $this->NombreJoursTravail;
    }

    public function setNombreJoursTravail(string $NombreJoursTravail): self
    {
        $this->NombreJoursTravail = $NombreJoursTravail;

        return $this;
    }

    public function getPriceHours(): ?string
    {
        return $this->PriceHours;
    }

    public function setPriceHours(string $PriceHours): self
    {
        $this->PriceHours = $PriceHours;

        return $this;
    }
}
