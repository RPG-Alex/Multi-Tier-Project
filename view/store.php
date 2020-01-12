<!--This design is based on a tutorial on YouTubere: and some of this sourcecode was modified from the tutorial's source here: https://github.com/webdevsimplified/introduction-to-web-development/tree/master/ . -->

<section class='container content-section'>
    <h2 class='section-header'>Services:</h2>
    <div class='shop-items'>

        <?php
        $serviceCall = new Store;
        $services = $serviceCall->getAllServices();
        foreach ($services as $service) {
          echo "<form action='' method='post'><div class='shop-item'>
              <span class='shop-item-title'>$service->service</span>
              <div class='shop-item-details'>
                <span class='shop-item-detail'>$service->description</span>
                  <span class='shop-item-price'>£$service->price</span>
                  <input type='hidden' name='serviceid' value='$service->sid'>
                  <input type='submit' name='purchase' class='btn btn-primary shop-item-button' value='purchase'>
              </div>
          </div>
          </form>";
        }
         ?>
  </div>
</section>
<section class='container content-section'>
    <h2 class='section-header'>CART</h2>
    <div class='cart-row'>
        <span class='cart-item cart-header cart-column'>Service Name</span>
        <span class='cart-price cart-header cart-column'>PRICE</span>
    </div>
      <?php
      $myCart = $serviceCall->retrieveCartItems($_COOKIE['PHPSESSID']);
      $i=0;
      if(isset($myCart)){
      foreach ($myCart as $cartItems) {
        $i=$i +$cartItems->price;
        echo "<div class='cart-row'><div class='cart-item cart-column'>
            <span class='cart-item-title'>$cartItems->service</span>
        </div>
        <span class='cart-price cart-column'>£$cartItems->price</span>
        <div class='cart-column'>
            <form action='' method='post'><input type='submit' class='btn btn-danger' name='remove' value='remove'><input type='hidden' value='$cartItems->sid' name='serviceid'></form>
        </div></div>";
      }} else {
        echo "Your cart is empty! try buying something!";
      }
       ?>

      <div class='cart-total'>
          <strong class='cart-total-title'>Total</strong>
          <span class='cart-total-price'>
            <?php
            echo "£".$i;
             ?>
          </span>
          <strong class='cart-total-title-tax'>Total with tax at 20%</strong>
          <span class='cart-total-price-tax'>
            <?php
            echo "£".(($i*.20)+$i);
             ?>
          </span>
      </div>
    <button class='btn btn-primary btn-purchase' type='button'>PURCHASE</button>
</section>
