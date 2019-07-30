<?php
    require_once('class/menu_item.php');
?>

<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>一覧</title>
</head>
<body>
    <div class="menus">
    <?php foreach ($menus as $menu): ?>
        <div class="menu">
            <div class="images">
                <img src="<?php echo $menu->getImages(); ?>" width="250" height="auto">
            </div>
            <div class="name">
                <a href="show.php?name=<?php echo $menu->getName(); ?>" target="_blank"><?php echo $menu->getName(); ?></a>
            </div>
            <?php if ($menu instanceof Drink): ?>
            <div class="info">
                <?php echo $menu->getAmount(); ?>
            </div>
            <?php else: ?>
            <div class="info">
                <?php echo $menu->getCalorie(); ?>
            </div>
            <?php endif; ?>
            <div class="price">
                <?php echo $menu->includeTaxPrice(); ?>円(税込み)
            </div>
        </div>
    <?php endforeach; ?>
    </div><!-- /.menus -->
</body>
</html>