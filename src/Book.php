<?php

namespace Tudublin;

class Book
{
    private int $id;
    private string $title;
    private int $numPages;
    private string $image;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getNumPages(): int
    {
        return $this->numPages;
    }

    public function setNumPages(int $numPages): void
    {
        $this->numPages = $numPages;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function __toString(): string
    {
        return "$this->id: $this->title, year $this->numPages";
    }
}