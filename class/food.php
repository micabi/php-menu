<?php

require_once('menu.php');

class Food extends Menu
{
    public function __construct($name, $price, $images, $coment, $calorie)
    {
        parent::__construct($name, $price, $images, $coment);
        $this->calorie = $calorie;
    }

    public function getCalorie()
    {
        return $this->calorie;
    }
}
