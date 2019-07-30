<?php

    require_once('menu.php');

    class Drink extends Menu
    {
        public function __construct($name, $price, $images, $coment, $amount)
        {
            parent::__construct($name, $price, $images, $coment);
            $this->amount = $amount;
        }

        public function getAmount()
        {
            return $this->amount;
        }
    }
