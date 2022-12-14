<?php

namespace App;

use DateTime;

class Order
{
    private int $id;

    private float $total_price;

    private DateTime $created_at;

    private Delivery $delivery;

    /**
     * @var Beer[] $beers
     */
    private array $beers = [];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Order
     */
    public function setId(int $id): Order
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPrice(): float
    {
        return $this->total_price;
    }

    /**
     * @param float $total_price
     * @return Order
     */
    public function setTotalPrice(float $total_price): Order
    {
        $this->total_price = $total_price;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->created_at;
    }

    /**
     * @param DateTime $created_at
     * @return Order
     */
    public function setCreatedAt(DateTime $created_at): Order
    {
        $this->created_at = $created_at;
        return $this;
    }


    public function getDelivery(): Delivery
    {
        return $this->delivery;
    }


    public function setDelivery(Delivery $delivery): Order
    {
        $this->delivery = $delivery;
        return $this;
    }


    public function getBeers(): array
    {
        return $this->beers;
    }


    public function addBeers(Beer $beer): Order
    {
        $this->beers[] = $beer;
        return $this;
    }



}