<?php
require_once APPROOT."/model/Page.class.php";
$page = new Page;
$page->header();

if (isset($_GET['page'])) {
  if (!file_exists(APPROOT."/view/".$_GET['page'].".php")){
    $page->viewToLoad('error');
  } else {
    $page->viewToLoad($_GET['page']);
  }
} elseif ($_GET ==[]) {
  $page->viewToLoad('homepage');
} else {
$page->viewToLoad('error');
header('Refresh: 10;url='.URLROOT."/index.php");
}
$page->footer();
