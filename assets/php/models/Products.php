<?php

namespace App\models;

class Products
{
    private ?int $id = null;

    private ?string $name = null;

    private ?int $price =null;

    private ?string $created_at=null;

    private ?bool $is_deleted=false;

    private ?int $beers_id = null;

    private ?int $brand_id = null;

    private ?string $description = null;

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
     * @return bool|null
     */
    public function getIsDeleted(): ?bool
    {
        return $this->is_deleted;
    }

    /**
     * @param bool|null $is_deleted
     * @return Products
     */
    public function setIsDeleted(?bool $is_deleted): Products
    {
        $this->is_deleted = $is_deleted;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getBeersId(): ?int
    {
        return $this->beers_id;
    }

    /**
     * @param int|null $beers_id
     * @return Products
     */
    public function setBeersId(?int $beers_id): Products
    {
        $this->beers_id = $beers_id;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getBrandId(): ?int
    {
        return $this->brand_id;
    }

    /**
     * @param int|null $brand_id
     * @return Products
     */
    public function setBrandId(?int $brand_id): Products
    {
        $this->brand_id = $brand_id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return Products
     */
    public function setDescription(?string $description): Products
    {
        $this->description = $description;
        return $this;
    }









}