<?php

namespace App\models;

use App\Comment;
use App\Order;
use DateTime;

class User
{
    private int $id;

    private ?string $first_name = null;

    private ?string $last_name = null;

    private ?string $phones = null;

    private ?string $email = null;

    private ?string $passwords = null;

    private ?string $created_at = null;

    private ?string $date_of_birth = null;

    private ?string $city = null;

    private ?bool $is_validated = false;

    private ?string $street = null;

    private ?string $zip_code = null;

    private ?string $gender = null;

    private ?bool $mention = false;

    private ?bool $newsletter = false;

    private ?bool $promotion = false;

    /**
     * @var Comment[] $comments
     */
//    private array $comments = [];

    /**
     * @var Order[] $orders
     */
////    private array $orders = [];/**
// * @return int
// */
public function getId(): int
{
    return $this->id;
}/**
 * @param int $id
 * @return User
 */
public function setId(int $id): User
{
    $this->id = $id;
    return $this;
}/**
 * @return string
 */
public function getFirstName(): string
{
    return $this->first_name;
}/**
 * @param string $first_name
 * @return User
 */
public function setFirstName(string $first_name): User
{
    $this->first_name = $first_name;
    return $this;
}/**
 * @return string
 */
public function getLastName(): string
{
    return $this->last_name;
}/**
 * @param string $last_name
 * @return User
 */
public function setLastName(string $last_name): User
{
    $this->last_name = $last_name;
    return $this;
}/**
 * @return string
 */
public function getEmail(): string
{
    return $this->email;
}/**
 * @param string $email
 * @return User
 */
public function setEmail(string $email): User
{
    $this->email = $email;
    return $this;
}/**
 * @return string
 */
public function getPasswords(): string
{
    return $this->passwords;
}/**
 * @param string $passwords
 * @return User
 */
public function setPasswords(string $passwords): User
{
    $this->passwords = $passwords;
    return $this;
}

    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->created_at;
    }

    /**
     * @param string|null $created_at
     * @return User
     */
    public function setCreatedAt(?string $created_at): User
    {
        $this->created_at = $created_at;
        return $this;
    }


    /**
     * @return string|null
     */
    public function getDateOfBirth(): ?string
    {
        return $this->date_of_birth;
    }

    /**
     * @param string|null $date_of_birth
     * @return User
     */
    public function setDateOfBirth(?string $date_of_birth): User
    {
        $this->date_of_birth = $date_of_birth;
        return $this;
    }


    /**
     * @return bool|null
     */
    public function getIsValidated(): ?bool
    {
        return $this->is_validated;
    }

    /**
     * @param bool|null $is_validated
     * @return User
     */
    public function setIsValidated(?bool $is_validated): User
    {
        $this->is_validated = $is_validated;
        return $this;
    }

/**
 * @return string
 */
public function getStreet(): string
{
    return $this->street;
}/**
 * @param string $street
 * @return User
 */
public function setStreet(string $street): User
{
    $this->street = $street;
    return $this;
}/**
 * @return string
 */
public function getZipCode(): string
{
    return $this->zip_code;
}/**
 * @param string $zip_code
 * @return User
 */
public function setZipCode(string $zip_code): User
{
    $this->zip_code = $zip_code;
    return $this;
}

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     * @return User
     */
    public function setCity(?string $city): User
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhones(): ?string
    {
        return $this->phones;
    }

    /**
     * @param string|null $phones
     * @return User
     */
    public function setPhones(?string $phones): User
    {
        $this->phones = $phones;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param string|null $gender
     * @return User
     */
    public function setGender(?string $gender): User
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getMention(): ?bool
    {
        return $this->mention;
    }

    /**
     * @param bool|null $mention
     * @return User
     */
    public function setMention(?bool $mention): User
    {
        $this->mention = $mention;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getNewsletter(): ?bool
    {
        return $this->newsletter;
    }

    /**
     * @param bool|null $newsletter
     * @return User
     */
    public function setNewsletter(?bool $newsletter): User
    {
        $this->newsletter = $newsletter;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getPromotion(): ?bool
    {
        return $this->promotion;
    }

    /**
     * @param bool|null $promotion
     * @return User
     */
    public function setPromotion(?bool $promotion): User
    {
        $this->promotion = $promotion;
        return $this;
    }
    




    public function getComments(): array
    {
        return $this->comments;
    }


    public function addComments(Comment $comment): User
    {
        $this->comments[] = $comment;
        return $this;
    }


    public function getOrders(): array
    {
        return $this->orders;
    }


    public function addOrders(Order $order): User
    {
        $this->orders[] = $order;
        return $this;
    }





}