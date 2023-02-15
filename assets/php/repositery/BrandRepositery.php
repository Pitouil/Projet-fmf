<?php

namespace App\repositery;

use App\models\Brand;


class BrandRepositery extends MainRepositery
{
    protected string $class;
    protected string $table;

    public function __construct()
    {
        parent::__construct(Brand::class);
    }


    public function addBrand(Brand $brand): Brand
    {
        $query = $this->pdo
            ->prepare('INSERT INTO brand ( name) VALUES (?)');
        $query->bindValue(1, $brand->getName());



        $query->execute();
        $brand->setId($this->pdo->lastInsertId());
        return $brand;
    }
    public function findLast()
    {
        $query = $this->pdo
            ->prepare('SELECT * FROM brand WHERE name = ?');

        $query->execute();
        return $query->fetchObject(Brand::class);
    }
    public function findOneById(int $id)
    {
        $query = $this->pdo
            ->prepare('SELECT *
                                FROM brand 
                                WHERE brand.id = ?');
        $query->bindValue(1, $id);
        $query->execute();
        return $query->fetchObject(Brand::class);
    }
}