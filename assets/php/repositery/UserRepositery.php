<?php

include_once 'MainRepositery.php';

class UserRepositery extends MainRepository
{
    protected string $class;
    protected string $table;

    public function __construct()
    {
        parent::__construct(User::class);
    }
}