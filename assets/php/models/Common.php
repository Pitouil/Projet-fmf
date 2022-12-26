<?php

trait Common
{
    private int $id;

    private string $name;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Common
     */
    public function setId(int $id): Common
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
     * @return Common
     */
    public function setName(string $name): Common
    {
        $this->name = $name;
        return $this;
    }


}