<?php
require_once APPROOT."/controller/store.php";
$getServices = new Store;
$allServices = $getServices->getAllServices();

 ?>

<div class="container container-section">
  <form class="contact-us" action="" method="post">
  <input type="email" name="email" placeholder="Your Email Address">
  <input type="text" name="contactMessage" placeholder="Specific Concerns">
  <select class="service" name="service">
    <?php foreach ($allServices as $service) {
      echo "<option value='$service->sid'>$service->service</option>";
    } ?>
    <option value="other">other</option>
  </select>
  <input type="submit" name="submit" value="submit">
  </form>
</div>
