<?php

require_once('menu.php');

class Food extends Menu
{
    public function __construct($name, $price, $images, $calorie)
    {
        parent::__construct($name, $price, $images);
        $this->calorie = $calorie;
    }

    public function getCalorie()
    {
        return $this->calorie;
    }
}
