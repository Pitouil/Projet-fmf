<?php

namespace App;

class Comment
{
    private int $id;

    private string $content;

    private User $user;

    private Grade $grade;

    private Beer $beer;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Comment
     */
    public function setId(int $id): Comment
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Comment
     */
    public function setContent(string $content): Comment
    {
        $this->content = $content;
        return $this;
    }


    public function getUser(): User
    {
        return $this->user;
    }


    public function setUser(User $user): Comment
    {
        $this->user = $user;
        return $this;
    }


    public function getGrade(): Grade
    {
        return $this->grade;
    }


    public function setGrade(Grade $grade): Comment
    {
        $this->grade = $grade;
        return $this;
    }


    public function getBeer(): Beer
    {
        return $this->beer;
    }


    public function setBeer(Beer $beer): Comment
    {
        $this->beer = $beer;
        return $this;
    }


}