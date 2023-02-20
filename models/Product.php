<?php
class Product
{
    public $name;
    public $description;
    public $prize;

    public function __construct($name, $description, $prize)
    {
        $this->name = $name;
        $this->description = $description;
        $this->prize = $prize;
    }
}
