<?php

class Video
{
    private string $name;
    public bool $taken = false;
    private int $rating = 0;
    private int $ratedTimes = 0;
    public function __construct(string $title)
    {
        $this->name = $title;
    }

    public function rate()
    {
        $rating = (int) readline("How would you rate this film (0-100): ");
        $this->ratedTimes++;
        $this->rating = ($this->rating + $rating) / $this->ratedTimes;
    }

    public function rent()
    {
        $this->taken = true;
    }

    public function return()
    {
        $this->taken = false;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getRating(): int
    {
        return $this->rating;
    }

    public function availability(): string
    {
        return $this->taken ? 'Not Available' : 'Available';
    }
}