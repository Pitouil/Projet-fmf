<?php

namespace App;

use DateTime;

class Beer
{
    private int $id;

    private string $name;

    private  float $price;

    private DateTime  $created_at;

    private int $is_deleted;

    private Alcohol $alcohol;

    private Brand $brand;

    private Color $color;

    private MainFlavor $mainFlavor;

    private TopStyle $topStyle;

    /**
     * @var Comment[] $comments
     */
    private array $comments = [];

    /**
     * @var Order[] $orders
     */
    private array $orders = [];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Beer
     */
    public function setId(int $id): Beer
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Beer
     */
    public function setName(string $name): Beer
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Beer
     */
    public function setPrice(float $price): Beer
    {
        $this->price = $price;
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
     * @return Beer
     */
    public function setCreatedAt(DateTime $created_at): Beer
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsDeleted(): int
    {
        return $this->is_deleted;
    }

    /**
     * @param int $is_deleted
     * @return Beer
     */
    public function setIsDeleted(int $is_deleted): Beer
    {
        $this->is_deleted = $is_deleted;
        return $this;
    }

    /**
     * @return Alcohol
     */
    public function getAlcohol(): Alcohol
    {
        return $this->alcohol;
    }

    /**
     * @param Alcohol $alcohol
     * @return Beer
     */
    public function setAlcohol(Alcohol $alcohol): Beer
    {
        $this->alcohol = $alcohol;
        return $this;
    }

    /**
     * @return Brand
     */
    public function getBrand(): Brand
    {
        return $this->brand;
    }

    /**
     * @param Brand $brand
     * @return Beer
     */
    public function setBrand(Brand $brand): Beer
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return Color
     */
    public function getColor(): Color
    {
        return $this->color;
    }

    /**
     * @param Color $color
     * @return Beer
     */
    public function setColor(Color $color): Beer
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return MainFlavor
     */
    public function getMainFlavor(): MainFlavor
    {
        return $this->mainFlavor;
    }

    /**
     * @param MainFlavor $mainFlavor
     * @return Beer
     */
    public function setMainFlavor(MainFlavor $mainFlavor): Beer
    {
        $this->mainFlavor = $mainFlavor;
        return $this;
    }

    /**
     * @return TopStyle
     */
    public function getTopStyle(): TopStyle
    {
        return $this->topStyle;
    }

    /**
     * @param TopStyle $topStyle
     * @return Beer
     */
    public function setTopStyle(TopStyle $topStyle): Beer
    {
        $this->topStyle = $topStyle;
        return $this;
    }


    public function getComments(): array
    {
        return $this->comments;
    }


    public function addComments(Comment $comment): Beer
    {
        $this->comments[] = $comment;
        return $this;
    }


    public function getOrders(): array
    {
        return $this->orders;
    }


    public function addOrders(Order $order): Beer
    {
        $this->orders[] = $order;
        return $this;
    }


}