<?php

namespace App\Entity\Finance;

use App\Entity\Extra\BaseEntity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Finance\CurrencyRateRepository")
 */
class CurrencyRate extends BaseEntity
{
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Finance\Currency")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull()
     */
    private $currency;

    /**
     * @ORM\Column(type="decimal", precision=15, scale=4)
     * @Assert\GreaterThanOrEqual(value="0.0001")
     */
    private $rate;

    /**
     * @ORM\Column(type="integer")
     * @Assert\GreaterThanOrEqual(value="1")
     */
    private $size;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotNull()
     */
    private $date;

    public function __construct()
    {
        parent::__construct();
        $this->rate = 1;
        $this->size = 1;
    }

    public function getCurrency(): ?Currency
    {
        return $this->currency;
    }

    public function setCurrency(?Currency $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getRate()
    {
        return $this->rate;
    }

    public function setRate($rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}
