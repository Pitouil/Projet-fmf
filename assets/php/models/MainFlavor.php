<?php
include_once 'Common.php';
class MainFlavor
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


    public function addBeers(Beer $beer): Main_flavor
    {
        $this->beers[] = $beer;
        return $this;
    }




}