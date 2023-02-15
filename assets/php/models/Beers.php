<?php

namespace App\models;

use DateTime;

class Beers extends Products
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
     * @return Beers
     */
    public function setId(?int $id): Beers
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
     * @return Beers
     */
    public function setTopStyle(?string $top_style): Beers
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
     * @return Beers
     */
    public function setColor(?string $color): Beers
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
     * @return Beers
     */
    public function setMainFlavor(?string $main_flavor): Beers
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
     * @return Beers
     */
    public function setAlcohol(?int $alcohol): Beers
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
     * @return Beers
     */
    public function setContenance(?int $contenance): Beers
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
     * @return Beers
     */
    public function setProducts(Products $products): Beers
    {
        $this->products = $products;
        return $this;
    }




}