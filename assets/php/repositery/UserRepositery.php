<?php

namespace App\repositery;

use App\models\Users;
use PDO;

class UserRepositery extends MainRepositery
{
    protected string $class;
    protected string $table;

    public function __construct()
    {
        parent::__construct(Users::class);
    }

    public function addUser(Users $user): Users
    {
        $query = $this->pdo
            ->prepare('INSERT INTO users (first_name, last_name, passwords, email, street, zip_code, city) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $query->bindValue(1, $user->getFirstName());
        $query->bindValue(2, $user->getLastName());
        $query->bindValue(3, $user->getPasswords());
        $query->bindValue(4, $user->getEmail());
        $query->bindValue(5, $user->getStreet());
        $query->bindValue(6, $user->getZipCode());
        $query->bindValue(7, $user->getCity());

        $query->execute();
        $user->setId($this->pdo->lastInsertId());
        return $user;
    }
    public function findOneBy(string $email){
        $query = $this->pdo
            ->prepare('SELECT * FROM users WHERE users.email = ?');
        $query->bindValue(1,$email);

        $query->execute();
        return $query->fetchObject(Users::class);
    }
}
