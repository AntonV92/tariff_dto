<?php

namespace main;

/**
 * @property string $title
 * @property float $price
 * @property int $validity
 * @property int $speed
 * @property string $type
 */
class TariffDTO
{

    /** @var string */
    private string $title;

    /** @var float */
    private float $price;

    /** @var int срок действия в количестве дней, к примеру */
    private int $validity;

    /** @var int предположительно фиксированная шкала измерения (mb) */
    private int $speed;

    /** @var TariffTypes */
    private TariffTypes $type;

    /**
     * @param string $title
     * @param float $price
     * @param int $validity
     * @param int $speed
     * @param TariffTypes $type
     */
    public function __construct(string $title, float $price, int $validity, int $speed, TariffTypes $type)
    {
        $this->title = $title;
        $this->price = $price;
        $this->validity = $validity;
        $this->speed = $speed;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getValidity(): int
    {
        return $this->validity;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @return TariffTypes
     */
    public function getType(): TariffTypes
    {
        return $this->type;
    }
}
