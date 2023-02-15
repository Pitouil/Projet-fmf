<?php

namespace App\repositery;

use App\models\Products;

class ProductRepositery extends MainRepositery
{
    protected string $class;
    protected string $table;

    public function __construct()
    {
        parent::__construct(Products::class);
    }



    public function addProduct(Products $product): Products
    {
        $query = $this->pdo
            ->prepare('INSERT INTO products ( name,price,created_at,brand_id,beer_id) VALUES (?,?,?,?,?)');
        $query->bindValue(1, $product->getName());
        $query->bindValue(2, $product->getPrice());
        $query->bindValue(3, $product->getCreatedAt());
        $query->bindValue(4, $product->getBrand());
        $query->bindValue(5, $product->getBeer());


        $query->execute();
        $product->setId($this->pdo->lastInsertId());
        return $product;
    }
}