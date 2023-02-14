<?php


namespace App\repositery;

use PDO;
use App\models\User;

abstract class MainRepositery
{
    protected PDO $pdo;

    private string $url = 'mysql:host=127.0.0.1:3306;dbname=projet';
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