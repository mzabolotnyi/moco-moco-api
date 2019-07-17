<?php

namespace App\Entity\Finance;

use App\Entity\Extra\BaseEntity;
use App\Entity\User\User;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Finance\CurrencyRepository")
 */
class Currency extends BaseEntity
{
    /**
     * @ORM\Column(type="string", length=3)
     * @Assert\Length(max="3")
     * @Assert\NotBlank()
     */
    private $iso;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(max="255")
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=1)
     * @Assert\Length(max="1")
     * @Assert\NotBlank()
     */
    private $symbol;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User\User")
     */
    private $user;

    public function getIso(): ?string
    {
        return $this->iso;
    }

    public function setIso(string $iso): self
    {
        $this->iso = $iso;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
