<section class='container content-section'>
    <h2 class='section-header'>Services:</h2>
    <div class='shop-items'>
        <?php
        $serviceCall = new Store;
        $services = $serviceCall->getAllServices();
        foreach ($services as $service) {
          echo "<div class='shop-item'>
              <span class='shop-item-title'>$service->service</span>
              <div class='shop-item-details'>
                <span class='shop-item-detail'>$service->description</span>
                  <span class='shop-item-price'>$$service->price</span>
                  <div class='invisible'>$service->sid</div>
                  <button class='btn btn-primary shop-item-button' type='button'>purchase</button>
              </div>
          </div>";
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
    <div class='cart-items'>
      </div>
      <div class='cart-total'>
          <strong class='cart-total-title'>Total</strong>
          <span class='cart-total-price'></span>
      </div>
    <button class='btn btn-primary btn-purchase' type='button'>PURCHASE</button>
</section>
