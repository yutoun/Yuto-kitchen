<?php
  require_once('menu.php');

  $friedRice = new Menu('FRIED RICE',300,'https://oryouri-matome.com/wp-content/uploads/2015/04/fried-rice00-detail.jpg');
  $remonDou= new Menu('檸檬堂',200,'https://images-na.ssl-images-amazon.com/images/I/51HSYMX9QCL._AC_SX466_.jpg');
  $water = new Menu('water',30,'https://cdn.images-dot.com/S2000/upload/2019080600051_2.jpg');
  $porkTofu = new Menu('pork&tofu',200,'https://secure.yamasa.com/recipe-img/3582.jpg');

  $menus = array($friedRice,$remonDou,$water,$porkTofu);



 ?>
