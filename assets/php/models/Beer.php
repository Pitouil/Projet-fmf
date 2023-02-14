<?php

namespace App\models;

use DateTime;

class Beer
{
    private ?int $id = null;

    private ?string $top_style = null;

    private ?string $color =null;

    private ?string  $main_flavor = null;

    private ?int $alcohol = null;

    private ?int $contenance = null;

    private Products $products;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return Beer
     */
    public function setId(?int $id): Beer
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTopStyle(): ?string
    {
        return $this->top_style;
    }

    /**
     * @param string|null $top_style
     * @return Beer
     */
    public function setTopStyle(?string $top_style): Beer
    {
        $this->top_style = $top_style;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @param string|null $color
     * @return Beer
     */
    public function setColor(?string $color): Beer
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMainFlavor(): ?string
    {
        return $this->main_flavor;
    }

    /**
     * @param string|null $main_flavor
     * @return Beer
     */
    public function setMainFlavor(?string $main_flavor): Beer
    {
        $this->main_flavor = $main_flavor;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAlcohol(): ?int
    {
        return $this->alcohol;
    }

    /**
     * @param int|null $alcohol
     * @return Beer
     */
    public function setAlcohol(?int $alcohol): Beer
    {
        $this->alcohol = $alcohol;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getContenance(): ?int
    {
        return $this->contenance;
    }

    /**
     * @param int|null $contenance
     * @return Beer
     */
    public function setContenance(?int $contenance): Beer
    {
        $this->contenance = $contenance;
        return $this;
    }

    /**
     * @return Products
     */
    public function getProducts(): Products
    {
        return $this->products;
    }

    /**
     * @param Products $products
     * @return Beer
     */
    public function setProducts(Products $products): Beer
    {
        $this->products = $products;
        return $this;
    }




}