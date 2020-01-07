<?php require_once('data.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>order confirmation</title>
    <link rel="stylesheet" type="text/css" href="/stylesheet.css">
  </head>
  <body>
    <div class="main">
      <h2>注文確認</h2>
      <?php foreach ($menus as $menu): ?>
        <!-- ↘︎nameをつけたinputの数字がプロパティとして出力される -->
        <?php
          $amount = $_POST[$menu->getName()] ;
          $menu -> setAmount($amount);
        ?>
        <p>
          <?php echo $menu->getName() ?>
          ×
          <?php echo $amount ?>
        </p>
          <!-- postがないと何個とったかがわからない -->



      <?php endforeach?>
    </div>
  </body>
</html>
