<?php

include_once 'UserRepositery';

abstract class MainRepositery
{
    private string $url = 'mysql:host=127.0.0.1:3306;dbname=les_brasseurs_auvergnats';
    private string $user = 'root';
    private string $pwd = '';
    private string $lowerClassName;
    public function __construct(protected string $className)
    {
        $this->pdo = new PDO($this->url, $this->user, $this->pwd);
        $this->lowerClassName = strtolower($this->className);
    }
    public function findAll(): array
    {

        return $this->pdo
            ->query('SELECT * FROM ' . $this->lowerClassName)

            ->fetchAll(PDO::FETCH_CLASS, $this->className);
    }
}