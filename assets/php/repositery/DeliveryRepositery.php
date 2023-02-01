<?php

namespace App;

class DeliveryRepositery
{
    protected string $class;
    protected string $table;

    public function __construct()
    {
        parent::__construct(Delivery::class);
    }
}