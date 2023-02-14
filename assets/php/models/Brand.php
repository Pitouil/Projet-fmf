<?php
namespace App\models;




class Brand
{
    private int $id;

    private string $name;

    /**
     * @var Products[] $products
     */
    private array $products = [];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Brand
     */
    public function setId(int $id): Brand
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
     * @return Brand
     */
    public function setName(string $name): Brand
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param array $products
     * @return Brand
     */
    public function setProducts(Products $product): Brand
    {
        $this->products[] = $product;
        return $this;
    }






}