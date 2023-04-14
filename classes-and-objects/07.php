<?php

class Dog
{
    private $name;
    private $sex;
    public $mother;
    public $father;
    public function __construct(string $name, string $sex)
    {
        $this->name = $name;
        $this->sex = $sex;
    }
    public function addParents(string $mother, string $father)
    {
        $this->father =$father;
        $this->mother = $mother;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getFather(): string
    {
        if ($this->father == null)
        {
            return 'Unknown';
        }
        else
        {
            return $this->father;
        }
    }
    public function sameMotherAs(Dog $name):bool
    {
        return $this->mother === $name->mother;
    }
}

class DogTest
{
    public function Main()
    {
        $max = new Dog('Max', 'male');
        $rocky = new Dog('Rocky', 'male');
        $sparky = new Dog('Sparky', 'male');
        $buster = new Dog('Buster', 'male');
        $sam = new Dog('Sam', 'male');
        $lady = new Dog('Lady', 'female');
        $molly = new Dog('Molly', 'female');
        $coco = new Dog('Coco', 'female');

        $max->addParents($lady->getName(), $rocky->getName());
        $coco->addParents($molly->getName(), $buster->getName());
        $rocky->addParents($molly->getName(), $sam->getName());
        $buster->addParents($lady->getName(), $sparky->getName());

        echo $coco->getFather().PHP_EOL;
        echo $sparky->getFather().PHP_EOL;
        echo $coco->sameMotherAs($rocky).PHP_EOL;
    }
}
$test = new DogTest();
$test->Main();