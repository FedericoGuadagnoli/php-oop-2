<?php
require_once __DIR__ . '/Categorie.php';

class Item extends Categories
{
    public $typeItem;

    public function __construct($image, $name, $description, $type, $prize, $typeItem)
    {
        $this->typeItem = $typeItem;

        parent::__construct($image, $name, $description, $type, $prize);
    }

    public function getTypeItem()
    {
        return "$this->typeItem";
    }
}
