<?php
error_reporting( E_ALL);
ini_set("display_errors",1);
require_once "controller/base.php";
require_once APPROOT."/controller/page.php";

var_dump($_GET);
var_dump($_POST);
var_dump(isset($_GET));
