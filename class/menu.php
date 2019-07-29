<?php

    class Menu
    {
        private $name;
        private $price;
        private $images;

        public function __construct($name, $price, $images)
        {
            $this->name = $name;
            $this->price = $price;
            $this->images = $images;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getPrice()
        {
            return $this->price;
        }

        public function includeTaxPrice()
        {
            $widthTax = number_format(round($this->price * 1.08));
            return $widthTax;
        }

        public function getImages()
        {
            return $this->images;
        }
    }
