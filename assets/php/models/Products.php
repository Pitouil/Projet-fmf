<?php

namespace App\models;

 class Products
{
    private ?int $id = null;

    private ?string $name = null;

    private ?int $price =null;

    private ?string $created_at=null;

    private ?string $is_deleted=null;

    private Beers $beer;

    private Brand $brand;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return Products
     */
    public function setId(?int $id): Products
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return Products
     */
    public function setName(?string $name): Products
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
     * @param int|null $price
     * @return Products
     */
    public function setPrice(?int $price): Products
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->created_at;
    }

    /**
     * @param string|null $created_at
     * @return Products
     */
    public function setCreatedAt(?string $created_at): Products
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIsDeleted(): ?string
    {
        return $this->is_deleted;
    }

    /**
     * @param string|null $is_deleted
     * @return Products
     */
    public function setIsDeleted(?string $is_deleted): Products
    {
        $this->is_deleted = $is_deleted;
        return $this;
    }

    /**
     * @return Beers
     */
    public function getBeer(): Beers
    {
        return $this->beer;
    }

    /**
     * @param Beers $beer
     * @return Products
     */
    public function setBeer(Beers $beer): Products
    {
        $this->beer = $beer;
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
     * @return Products
     */
    public function setBrand(Brand $brand): Products
    {
        $this->brand = $brand;
        return $this;
    }



}