<?php

namespace App\Entities;

class Book
{
    private string $title;
    private string $author;
    private int $id;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

//    public function __construct(string $title, string $author)
//    {
//        $this->title = $title;
//        $this->author = $author;
//    }
}
