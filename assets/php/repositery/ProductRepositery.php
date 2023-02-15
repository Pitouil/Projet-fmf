<?php

namespace App\repositery;

use App\models\Products;

 class ProductRepositery
{
    protected string $class;
    protected string $table;

    public function __construct()
    {
        parent::__construct(Products::class);
    }
}