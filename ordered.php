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
      <h2 class="nexttitle">注文確認</h2>
      <?php $totalPayment= 0;?>
      <?php foreach ($menus as $menu): ?>
        <!-- ↘︎nameをつけたinputの数字がプロパティとして出力される -->
        <?php
          $amount = $_POST[$menu->getName()] ;
          $menu -> setAmount($amount);
          $totalPayment += $menu->getTotalPrice();
        ?>
        <p>
          <?php echo $menu->getName() ?>
          ×
          <?php echo $amount ?>
          = ￥
          <?php echo $menu->getTotalPrice()?>
        </p>
          <!-- postがないと何個とったかがわからない -->
      <?php endforeach?>
      <p>合計金額:￥<?php echo $totalPayment ?></p>
    </div>
  </body>
</html>
