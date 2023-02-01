<?php

namespace App\models;

use App\Comment;
use App\Order;
use DateTime;

class Users
{
    private int $id;

    private ?string $firstName = null;

    private ?string $lastName = null;

//    private ?string $phoneNumber = null;

    private ?string $email = null;

    private ?string $passwords = null;

//    private ?DateTime $createdAt = null;

//    private ?DateTime $dateOfBirth = null;

    private ?string $city = null;

//    private ?string $isValidated = null;

    private ?string $street = null;

    private ?string $zipCode = null;

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
 * @return Users
 */
public function setId(int $id): Users
{
    $this->id = $id;
    return $this;
}/**
 * @return string
 */
public function getFirstName(): string
{
    return $this->firstName;
}/**
 * @param string $firstName
 * @return Users
 */
public function setFirstName(string $firstName): Users
{
    $this->firstName = $firstName;
    return $this;
}/**
 * @return string
 */
public function getLastName(): string
{
    return $this->lastName;
}/**
 * @param string $lastName
 * @return Users
 */
public function setLastName(string $lastName): Users
{
    $this->lastName = $lastName;
    return $this;
}/**
 * @return string
 */
public function getPhoneNumber(): string
{
    return $this->phoneNumber;
}/**
 * @param string $phoneNumber
 * @return Users
 */
public function setPhoneNumber(string $phoneNumber): Users
{
    $this->phoneNumber = $phoneNumber;
    return $this;
}/**
 * @return string
 */
public function getEmail(): string
{
    return $this->email;
}/**
 * @param string $email
 * @return Users
 */
public function setEmail(string $email): Users
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
 * @return Users
 */
public function setPasswords(string $passwords): Users
{
    $this->passwords = $passwords;
    return $this;
}/**
 * @return DateTime
 */
public function getCreatedAt(): DateTime
{
    return $this->createdAt;
}/**
 * @param DateTime $createdAt
 * @return Users
 */
public function setCreatedAt(DateTime $createdAt): Users
{
    $this->createdAt = $createdAt;
    return $this;
}/**
 * @return DateTime
 */
public function getDateOfBirth(): DateTime
{
    return $this->dateOfBirth;
}/**
 * @param DateTime $dateOfBirth
 * @return Users
 */
public function setDateOfBirth(DateTime $dateOfBirth): Users
{
    $this->dateOfBirth = $dateOfBirth;
    return $this;
}
/**
 * @return string
 */
public function getIsValidated(): string
{
    return $this->isValidated;
}/**
 * @param string $isValidated
 * @return Users
 */
public function setIsValidated(string $isValidated): Users
{
    $this->isValidated = $isValidated;
    return $this;
}/**
 * @return string
 */
public function getStreet(): string
{
    return $this->street;
}/**
 * @param string $street
 * @return Users
 */
public function setStreet(string $street): Users
{
    $this->street = $street;
    return $this;
}/**
 * @return string
 */
public function getZipCode(): string
{
    return $this->zipCode;
}/**
 * @param string $zipCode
 * @return Users
 */
public function setZipCode(string $zipCode): Users
{
    $this->zipCode = $zipCode;
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
     * @return Users
     */
    public function setCity(?string $city): Users
    {
        $this->city = $city;
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