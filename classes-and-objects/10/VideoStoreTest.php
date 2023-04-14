<?php

include "Video.php";
include "VideoStore.php";

class VideoStoreTest
{
    private VideoStore $inventory;
    public function __construct(VideoStore $inventory)
    {
        $this->inventory = $inventory;
    }
    public function interact()
    {
        while (true) {
            echo PHP_EOL;
            echo "We welcome you at our store, how may we help you?\n";
            echo "Enter 0 for EXIT\n";
            echo "Enter 1 to rent video\n";
            echo "Enter 2 to return video\n";
            echo "Enter 3 to rate video\n";
            echo "Enter 4 to add video\n";

            $order = (int) readline();
            $this->inventory->displayFilms();

            switch ($order) {
                case 0:
                    echo "Have a nice day!";
                    die;
                case 1:
                    $this->inventory->rentVideo();
                    break;
                case 2:
                    $this->inventory->returnVideo();
                    break;
                case 3:
                    $this->inventory->rateVideo();
                    break;
                case 4:
                    $this->inventory->addVideo();
                    break;
                default:
                    echo "Sorry, but you need enter number between 0 and 3";
            }
        }
    }
}

$shop = new VideoStoreTest(new VideoStore(new Video("Matrix"), new Video("Godfather II"),
    new Video("Star Wars Episode IV: A New Hope")));
$shop->interact();