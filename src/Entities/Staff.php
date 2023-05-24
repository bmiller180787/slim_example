<?php

namespace App\Entities;

class Staff
{
    private string $name;
    private string $position;
    private int $years_of_service;

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    private int $id;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function getPosition(): string
    {
        return $this->position;
    }

    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    public function getYearsOfService(): int
    {
        return $this->years_of_service;
    }

    public function setYearsOfService(int $years_of_service): void
    {
        $this->years_of_service = $years_of_service;
    }

    public function getId(): int
    {
        return $this->id;
    }


//    public function __construct(string $title, string $author)
//    {
//        $this->title = $title;
//        $this->author = $author;
//    }
}
