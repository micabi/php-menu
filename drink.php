<?php

	require_once ('menu.php');

	class Drink extends Menu {
		public function __construct($name, $price, $images, $amount) {
			parent::__construct($name, $price, $images);
			$this->amount = $amount;
		}

		public function getAmount(){
			return $this->amount;
		}
	}