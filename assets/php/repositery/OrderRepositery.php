<?php

namespace App;

class OrderRepositery extends MainRepositery
{
    protected string $class;
    protected string $table;

    public function __construct()
    {
        parent::__construct(Order::class);
    }
}