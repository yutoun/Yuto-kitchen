<?php
require_once('menu.php');
require_once('data.php');
?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Yuto's kitchen</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>

      <?php foreach ($menus as $menu): ?>
        <div class="items">
          <img src="<?php echo $menu->getImage() ?>" alt="">
          <h3><?php echo $menu->getName() ?></h3>
          <p>￥<?php echo $menu->getPrice() ?></p>
          <input type="text" name="" value="">個
          <a href="detail.php">>>>詳細はコチラ</a>
        </div>
      <?php endforeach ?>
      <input type="submit" name="" value="オーダーする">
  </body>
</html>
