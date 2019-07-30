<?php

    require_once('drink.php');
    require_once('food.php');

    $coffee = new Drink('コーヒー', 400, 'images/coffee.jpg', '程よい苦味。自家焙煎。', '150ml');
    $cola = new Drink('ルートビア', 500, 'images/cola.jpg', '炭酸飲料の定番。', '350ml');
    $jasmin_tea = new Drink('さんぴん茶', 350, 'images/jasmin.jpg', 'ほのかな花の香り。', '250ml');

    $curry = new Food('カレー', 700, 'images/curry.jpg', 'ピリッとスパイシー。', '800kcal');
    $pasta = new Food('パスタ', 600, 'images/pasta.jpg', 'ベーシックなナポリタン。','450kcal');
    $toast = new Food('トースト', 400, 'images/toast.jpg',  '珍しい黒パンのトーストに目玉焼きをトッピング。', '300kcal');

    $menus = [$coffee, $cola, $jasmin_tea, $curry, $pasta, $toast];