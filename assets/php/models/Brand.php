<?php
namespace App;

include_once 'Common.php';


class Brand
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


    public function addBeers(Beer $beer): Brand
    {
        $this->beers[] = $beer;
        return $this;
    }


}