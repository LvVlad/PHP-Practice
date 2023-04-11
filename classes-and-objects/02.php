<?php

class Point {
    private $x;
    private $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function swapPoints(Point $p1,Point $p2)
    {
        $tempX = $p1->x;
        $tempY = $p1->y;
        $p1->x = $p2->x;
        $p1->y = $p2->y;
        $p2->x = $tempX;
        $p2->y = $tempY;
    }

    public function getPoints()
    {
        return "{$this->x}, {$this->y}";
    }
}

$point1 = new Point(5, 2);
$point2 = new Point(-3, 6);

echo "Before the swap:\n({$point1->getPoints()})\n({$point2->getPoints()})".PHP_EOL;

$point1->swapPoints($point1, $point2);

echo "After the swap:\n({$point1->getPoints()})\n({$point2->getPoints()})";
