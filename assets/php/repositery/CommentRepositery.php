<?php

namespace App;

class CommentRepositery extends MainRepositery
{
    protected string $class;
    protected string $table;

    public function __construct()
    {
        parent::__construct(Comment::class);
    }
}