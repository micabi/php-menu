<?php

    require_once('drink.php');
    require_once('food.php');

    $coffee = new Drink('コーヒー', 400, 'images/coffee.jpg', '150ml');
    $cola = new Drink('コーラ', 500, 'images/cola.jpg', '350ml');
    $jasmin_tea = new Drink('さんぴん茶', 350, 'images/jasmin.jpg', '250ml');

    $curry = new Food('カレー', 700, 'images/curry.jpg', '800kcal');
    $pasta = new Food('パスタ', 600, 'images/pasta.jpg', '450kcal');
    $toast = new Food('トースト', 400, 'images/toast.jpg', '300kcal');
