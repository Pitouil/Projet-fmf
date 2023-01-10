<?php
namespace App;

include_once 'Common.php';
class TopStyle
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


    public function setBeers(Beer $beer): TopStyle
    {
        $this->beers[] = $beer;
        return $this;
    }


}