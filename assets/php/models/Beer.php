<?php

class Beer
{
    private int $id;

    private string $name;

    private  float $price;

    private DateTime  $created_at;

    private int $is_deleted;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Beer
     */
    public function setId(int $id): Beer
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
     * @return Beer
     */
    public function setName(string $name): Beer
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Beer
     */
    public function setPrice(float $price): Beer
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->created_at;
    }

    /**
     * @param DateTime $created_at
     * @return Beer
     */
    public function setCreatedAt(DateTime $created_at): Beer
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsDeleted(): int
    {
        return $this->is_deleted;
    }

    /**
     * @param int $is_deleted
     * @return Beer
     */
    public function setIsDeleted(int $is_deleted): Beer
    {
        $this->is_deleted = $is_deleted;
        return $this;
    }


}