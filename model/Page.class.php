<?php
class Page {
  public function header(){
    require_once APPROOT."/view/include/header.php";
  }
  public function viewToLoad($page){
    require_once APPROOT."/view/".$page.".php";
  }
  public function footer(){
    require_once APPROOT."/view/include/footer.php";
  }
}
