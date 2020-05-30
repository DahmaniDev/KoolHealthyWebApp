<?php

namespace App\Entity;

use App\Repository\RepasRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RepasRepository::class)
 */
class Repas
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="integer")
     */
    private $prot_val;

    /**
     * @ORM\Column(type="integer")
     */
    private $cal_val;

    /**
     * @ORM\Column(type="integer")
     */
    private $fat_val;

    /**
     * @ORM\Column(type="integer")
     */
    private $carb_val;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="blob")
     */
    private $image;

    /**
     * @ORM\OneToOne(targetEntity="Traiteur")
     * @ORM\Column(type="integer")
     */
    private $id_traiteur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getProtVal(): ?int
    {
        return $this->prot_val;
    }

    public function setProtVal(int $prot_val): self
    {
        $this->prot_val = $prot_val;

        return $this;
    }

    public function getCalVal(): ?int
    {
        return $this->cal_val;
    }

    public function setCalVal(int $cal_val): self
    {
        $this->cal_val = $cal_val;

        return $this;
    }

    public function getFatVal(): ?int
    {
        return $this->fat_val;
    }

    public function setFatVal(int $fat_val): self
    {
        $this->fat_val = $fat_val;

        return $this;
    }

    public function getCarbVal(): ?int
    {
        return $this->carb_val;
    }

    public function setCarbVal(int $carb_val): self
    {
        $this->carb_val = $carb_val;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): self
    {
        $this->image = $image;

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
}
