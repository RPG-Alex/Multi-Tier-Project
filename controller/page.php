<?php
require_once APPROOT."/model/Page.class.php";
setcookie('shopping_cart');
echo "Cookie Info";
print_r($_COOKIE);
echo ($_COOKIE['PHPSESSID']);
$page = new Page;
$page->header();
if (!empty($_GET['page'])) {
  if (file_exists(APPROOT."/view/".$_GET['page'].".php")){
    if ($_GET['page'] === 'store') {
        require_once APPROOT."/controller/store.php";
        }
        if ($_GET['page'] =='faq' or $_GET['page'] =='contact') {
          require_once APPROOT."/model/Database.class.php";
          require_once APPROOT."/model/SiteDetails.class.php";
        }
    $page->viewToLoad($_GET['page']);

}
} else {
  $page->viewToLoad('homepage');
}
$page->footer();
