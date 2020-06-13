<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="Repas")
     * @ORM\Column(type="integer")
     */
    private $id_repas;

    /**
     * @ORM\Column(type="date")
     */
    private $date_comm;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="float")
     */
    private $prix_comm;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

    /**
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\Column(type="integer")
     */
    private $id_user;

    /**
     * @ORM\OneToOne(targetEntity="Traiteur")
     * @ORM\Column(type="integer")
     */
    private $id_traiteur;

    /**
     * @ORM\Column(type="date")
     */
    private $date_livraison;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdRepas(): ?int
    {
        return $this->id_repas;
    }

    public function setIdRepas(int $id_repas): self
    {
        $this->id_repas = $id_repas;

        return $this;
    }

    public function getDateComm(): ?\DateTimeInterface
    {
        return $this->date_comm;
    }

    public function setDateComm(\DateTimeInterface $date_comm): self
    {
        $this->date_comm = $date_comm;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getPrixComm(): ?float
    {
        return $this->prix_comm;
    }

    public function setPrixComm(float $prix_comm): self
    {
        $this->prix_comm = $prix_comm;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getIdTraiteur(): ?int
    {
        return $this->id_traiteur;
    }

    public function setIdTraiteur(int $id_traiteur): self
    {
        $this->id_traiteur = $id_traiteur;

        return $this;
    }

    public function getDateLivraison(): ?\DateTimeInterface
    {
        return $this->date_livraison;
    }

    public function setDateLivraison(\DateTimeInterface $date_livraison): self
    {
        $this->date_livraison = $date_livraison;

        return $this;
    }
}
