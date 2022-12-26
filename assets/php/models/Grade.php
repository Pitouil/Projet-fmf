<?php

class grade
{
    private int $id;

    private string $name;

    private int $star_number;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return grade
     */
    public function setId(int $id): grade
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return grade
     */
    public function setName(string $name): grade
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarNumber(): int
    {
        return $this->star_number;
    }

    /**
     * @param int $star_number
     * @return grade
     */
    public function setStarNumber(int $star_number): grade
    {
        $this->star_number = $star_number;
        return $this;
    }


}