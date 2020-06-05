<?php

namespace App\Entity;

use App\Repository\BesoinsRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;

/**
 * @ORM\Entity(repositoryClass=BesoinsRepository::class)
 */
class Besoins
{
    /**
     * @ORM\Id()
     * @ORM\OneToOne(targetEntity="User")
     * * @ORM\Column(type="integer")
     */
    private $user_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $protein;

    /**
     * @ORM\Column(type="integer")
     */
    private $calories;

    /**
     * @ORM\Column(type="integer")
     */
    private $carbs;

    /**
     * @ORM\Column(type="integer")
     */
    private $fats;

    public function getUserID(): ?integer
    {
        return $this->user;
    }

    public function setUserID(User $user): self
    {
        $this->user_id = $user->id;

        return $this;
    }

    public function getProtein(): ?int
    {
        return $this->protein;
    }

    public function setProtein(int $protein): self
    {
        $this->protein = $protein;

        return $this;
    }

    public function getCalories(): ?int
    {
        return $this->calories;
    }

    public function setCalories(int $calories): self
    {
        $this->calories = $calories;

        return $this;
    }

    public function getCarbs(): ?int
    {
        return $this->carbs;
    }

    public function setCarbs(int $carbs): self
    {
        $this->carbs = $carbs;

        return $this;
    }

    public function getFats(): ?int
    {
        return $this->fats;
    }

    public function setFats(int $fats): self
    {
        $this->fats = $fats;

        return $this;
    }

    public function _construct($user)
    {
        $this->user = $user;
    }
}
