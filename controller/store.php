<?php
require_once APPROOT."/model/Database.class.php";
require_once APPROOT."/model/Store.class.php";
if (isset($_POST['purchase'])) {
  $cart = new Store;
  $putInCart = $cart->insertCartItems($_COOKIE['PHPSESSID'],$_POST['serviceid']);
} elseif (isset($_POST['remove'])) {
  echo "removal has succeded";
}
