<?php

namespace App\repositery;


use App\models\Beers;
use App\repositery\MainRepositery;

class BeerRepositery extends MainRepositery
{
    protected string $class;
    protected string $table;

    public function __construct()
    {
        parent::__construct(Beers::class);
    }

    public function addBeer(Beers $beer): Beers
    {
        $query = $this->pdo
            ->prepare('INSERT INTO beers ( top_style,color,main_flavor,alcohol,contenance) VALUES (?,?,?,?,?)');
        $query->bindValue(1, $beer->getTopStyle());
        $query->bindValue(2, $beer->getColor());
        $query->bindValue(3, $beer->getMainFlavor());
        $query->bindValue(4, $beer->getAlcohol());
        $query->bindValue(5, $beer->getContenance());



        $query->execute();
        $beer->setId($this->pdo->lastInsertId());
        return $beer;
    }
    public function findLast()
    {
        $query = $this->pdo
            ->prepare('SELECT * FROM beers WHERE id = MAX(id)');

        $query->execute();
        return $query->fetchObject(Beers::class);
    }
    public function findOneById(int $id)
    {
        $query = $this->pdo
            ->prepare('SELECT *
                                FROM beers
                                WHERE beers.id = ?');
        $query->bindValue(1, $id);
        $query->execute();
        return $query->fetchObject(Beers::class);
    }
}


