<?php

require_once "Video.php";
class VideoStore
{
    private array $videos;

    public function __construct(Video ...$videos)
    {
        $this->videos = $videos;
    }
    public function displayFilms(): void
    {
        foreach ($this->videos as $key=>$video)
        {
            echo "[$key] {$video->getName()} | Rating: {$video->getRating()} | {$video->availability()}".PHP_EOL;
        }
    }
    public function chooseVideo()
    {
        $choose = (int) readline('Enter index of movie: ');
        return $this->videos[$choose];
    }
    public function addVideo()
    {
        $video = readline("Write title of movie you want to add: ");
        $this->videos[] = new Video($video);
    }
    public function rentVideo()
    {
        $chosen = $this->chooseVideo();
        if($chosen->taken)
        {
            echo "There is no video";
        }
        else
        {
            $chosen->rent();
        }
    }
    public function returnVideo()
    {
        $this->chooseVideo()->return();
    }
    public function rateVideo()
    {
        $this->chooseVideo()->rate();
    }
}