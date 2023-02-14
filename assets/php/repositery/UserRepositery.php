<?php

namespace App\repositery;

use App\models\User;
use PDO;

class UserRepositery extends MainRepositery
{
    protected string $class;
    protected string $table;

    public function __construct()
    {
        parent::__construct(User::class);
    }

    public function addUser(User $user): User
    {
        $query = $this->pdo
            ->prepare('INSERT INTO user (first_name, last_name, passwords, email, street, zip_code, city, gender, mention, newsletter, promotion, created_at, date_of_birth, phones ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $query->bindValue(1, $user->getFirstName());
        $query->bindValue(2, $user->getLastName());
        $query->bindValue(3, $user->getPasswords());
        $query->bindValue(4, $user->getEmail());
        $query->bindValue(5, $user->getStreet());
        $query->bindValue(6, $user->getZipCode());
        $query->bindValue(7, $user->getCity());
        $query->bindValue(8, $user->getGender());
        $query->bindValue(9, $user->getMention());
        $query->bindValue(10, $user->getNewsletter());
        $query->bindValue(11, $user->getPromotion());
        $query->bindValue(12, $user->getCreatedAt());
        $query->bindValue(13, $user->getDateOfbirth());
        $query->bindValue(14, $user->getPhones());

        $query->execute();
        $user->setId($this->pdo->lastInsertId());
        return $user;
    }

    public function findOneBy(string $email)
    {
        $query = $this->pdo
            ->prepare('SELECT * FROM user WHERE user.email = ?');
        $query->bindValue(1, $email);

        $query->execute();
        return $query->fetchObject(User::class);
    }
}
