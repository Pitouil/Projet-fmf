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
}