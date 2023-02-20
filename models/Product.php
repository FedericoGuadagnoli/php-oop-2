<?php
class Product
{
    public $image;
    public $name;
    public $description;
    public $prize;

    public function __construct($image, $name, $description, $prize)
    {
        $this->name = $name;
        $this->description = $description;
        $this->prize = $prize;
        $this->image = $image;
    }

    public function getImage()
    {
        return "$this->image";
    }
    public function getName()
    {
        return "$this->name";
    }
    public function getDescription()
    {
        return "$this->description";
    }
    public function getPrize()
    {
        return "$this->prize";
    }
}
