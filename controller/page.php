<?php
require_once APPROOT."/model/Page.class.php";
$page = new Page;
$page->header();

if (isset($_GET['page'])) {
  if (file_exists(APPROOT."/view/".$_GET['page'].".php")){
    if ($_GET['page'] === 'store') {
        require_once APPROOT."/controller/store.php";
        }
    $page->viewToLoad($_GET['page']);

}
} else {
  $page->viewToLoad('homepage');
}
$page->footer();
