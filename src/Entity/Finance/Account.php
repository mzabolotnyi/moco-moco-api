<?php

namespace App\Entity\Finance;

use App\Entity\Extra\BaseEntity;
use App\Entity\User\User;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Finance\AccountRepository")
 */
class Account extends BaseEntity
{
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User\User")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull()
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(max="255")
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=7, nullable=true)
     * @Assert\Length(max="7")
     */
    private $color;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $active;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $merchantId;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $merchantPassword;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cardNumber;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $importType;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $import;

    public function __construct()
    {
        parent::__construct();
        $this->active = false;
        $this->import = false;
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    public function setMerchantId(?string $merchantId): self
    {
        $this->merchantId = $merchantId;

        return $this;
    }

    public function getMerchantPassword(): ?string
    {
        return $this->merchantPassword;
    }

    public function setMerchantPassword(?string $merchantPassword): self
    {
        $this->merchantPassword = $merchantPassword;

        return $this;
    }

    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }

    public function setCardNumber(?string $cardNumber): self
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    public function getImportType(): ?string
    {
        return $this->importType;
    }

    public function setImportType(?string $importType): self
    {
        $this->importType = $importType;

        return $this;
    }

    public function getImport(): ?bool
    {
        return $this->import;
    }

    public function setImport(?bool $import): self
    {
        $this->import = $import;

        return $this;
    }
}
