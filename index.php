<?php
	require_once ('drink.php');
	require_once ('menu_item.php');

	$drinks = [$coffee, $cola, $jasmin_tea];

//	echo $jasmin_tea->getName();
//	echo $jasmin_tea->getPrice();
//	echo $jasmin_tea->includeTaxPrice();
//	echo $jasmin_tea->getImages();
?>

<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<div class="menus">
    <?php foreach($drinks as $drink): ?>
    <div class="menu">
        <div class="images"><img src="<?php echo $drink->getImages(); ?>" width="250" height="auto"></div>
        <div class="name"><?php echo $drink->getName(); ?></div>
	      <div class="info"><?php echo $drink->getAmount(); ?></div>
        <div class="price"><?php echo $drink->includeTaxPrice(); ?></div>
    </div>
    <?php endforeach; ?>
</div><!-- /.menus -->
</body>
</html>