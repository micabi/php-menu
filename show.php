<?php
require_once('class/menu_item.php');
require_once('class/menu_review.php');
$menuName = $_GET['name'];
// $menuName = 'ルートビア';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $menuName; ?></title>
</head>
<body>
<?php foreach($menus as $menu):?>
  <?php if($menu->getName() == $menuName): ?>

    <h2><?php echo $menu->getName(); ?></h2>
    <img src="<?php echo $menu->getImages(); ?>" alt="<?php echo $menu->getName(); ?>" width="640" height="425">
    <p>
      <?php echo $menu->includeTaxPrice(); ?>円(税込み)
      <?php if($menu instanceof Drink): ?>
        <span><?php echo $menu->getAmount(); ?></span>
      <?php else: ?>
        <span><?php echo $menu->getCalorie(); ?></span>
      <?php endif; ?>
      </p>
      <p><?php echo $menu->getComent(); ?></p>
  <?php endif; ?>

<?php endforeach; ?>
<hr>
<h3>レビュー</h3>
<?php foreach($reviews as $review): ?>
<?php $user = $review->getReviewer($users); ?>
    <?php if($review->getMenuName() == $menuName): ?>
      <p><?php echo $user->getUserId(); ?>: <?php echo $user->getUserName(); ?>: <?php echo $user->getGender(); ?></p>
      <p><?php echo $review->getBody(); ?></p>
    <?php endif; ?>
<?php endforeach; ?>
</body>
</html>