<?php

require_once __DIR__ . '/Product.php';

class Categories extends Product
{
    public $type;

    public function __construct($image, $name, $description, $type, $prize)
    {
        $this->type = $type;

        parent::__construct($image, $name, $description, $prize);
    }
    public function getType()
    {
        return "$this->type";
    }
}
