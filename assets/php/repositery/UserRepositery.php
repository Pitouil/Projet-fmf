<?php

namespace App;

class UserRepositery extends MainRepositery
{
    protected string $class;
    protected string $table;

    public function __construct()
    {
        parent::__construct(User::class);
    }
}