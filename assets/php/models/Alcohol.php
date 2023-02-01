<?php

namespace App;


class Alcohol
{
    use Common;

    /**
     * @var Beer[] $beers
     */
    private array $beers = [];


    public function getBeers(): array
    {
        return $this->beers;
    }


    public function addBeers(Beer $beer): Alcohol
    {
        $this->beers[] = $beer;
        return $this;
    }








}