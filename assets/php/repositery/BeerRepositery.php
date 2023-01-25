<?php

namespace App;

class BeerRepositery extends MainRepositery
{
    protected string $class;
    protected string $table;

    public function __construct()
    {
        parent::__construct(Beer::class);
    }
}