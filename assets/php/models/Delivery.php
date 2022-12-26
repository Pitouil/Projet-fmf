<?php

class Delivery
{
    private int $id;

    private string $country;

    private string $street;

    private string $zip_code;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Delivery
     */
    public function setId(int $id): Delivery
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Delivery
     */
    public function setCountry(string $country): Delivery
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return Delivery
     */
    public function setStreet(string $street): Delivery
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zip_code;
    }

    /**
     * @param string $zip_code
     * @return Delivery
     */
    public function setZipCode(string $zip_code): Delivery
    {
        $this->zip_code = $zip_code;
        return $this;
    }


}