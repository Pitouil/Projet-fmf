<?php
include_once 'Common.php';
class Color
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


    public function addBeers(Beer $beer): Color
    {
        $this->beers[] = $beer;
        return $this;
    }


}