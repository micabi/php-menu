<?php
  require_once('drink.php');
  require_once('food.php');
  require_once('menu_item.php');
  require_once('review.php');
  require_once('user.php');

$user1 = new User('みかん', 'female');
$user2 = new User('カルビ', 'female');
$user3 = new User('みきぷ', 'female');
$user4 = new User('るんるん', 'male');
$user5 = new User('みきぷ', 'male');
$user6 = new User('みきまっする', 'male');

$users = [$user1, $user2, $user3, $user4, $user5, $user6];

// 第3引数に$userを取るので$usersより後にインスタンスを作成する
$review1 = new Review($curry->getName(), 'スパイスが効いていて見た目より辛い。', $user1->getUserId());
$review2 = new Review($jasmin_tea->getName(), '何かと思ったらジャスミン茶だった。生は美味しい。', $user2->getUserId());
$review3 = new Review($cola->getName(), '黒ビールかな？と思ったけど薬草みたいな香りがするコーラ？', $user3->getUserId());
$review4 = new Review($cola->getName(), 'んんっま！！', $user4->getUserId());
$review5 = new Review($curry->getName(), 'ビビビ！', $user2->getUserId());
$review6 = new Review($curry->getName(), 'この味付け興味深い', $user5->getUserId());
$review7 = new Review($pasta->getName(), 'まっするとしてはいただけない。', $user6->getUserId());
$review8 = new Review($toast->getName(), 'パンを見るとよだれが出る。', $user1->getUserId());
$review9 = new Review($toast->getName(), '誰かが食べてるのを見ると欲しくなる。', $user2->getUserId());

$reviews = [$review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8, $review9];
