<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo SITENAME; ?></title>
    <link rel="shortcut icon" href="<?php echo PICTURES.'Logo.png'; ?>">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <?php
      if ($_GET['page']== 'store') {
        echo "<script type='text/javascript' src=".URLROOT."/js/store.js></script>";
      }
     ?>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php"><img class="logo" src="<?php echo URLROOT."/pictures/Logo.png"; ?>" alt="">Sino-Western Lifestyle Consulting:</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo URLROOT."/index.php"; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT."/index.php?page=about"; ?>">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT."/index.php?page=faq"; ?>">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT."/index.php?page=store"; ?>">Purchase Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT."/index.php?page=contact"; ?>">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>
