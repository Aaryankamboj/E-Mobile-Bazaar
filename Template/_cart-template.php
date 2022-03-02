<!-- Shopping cart section starts here-->
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['delete-cart-button'])) {
    $deleterecord = $Cart->deleteCart($_POST['item_id']);
  }

  // Save for later
  if(isset($_POST['wishlist-submit'])){
    $Cart->saveForLater($_POST['item_id']);
  }
    
}
?>
<section id="cart" class="py-3 mb-5">
  <div class="container-fluid w-100 mx-3">
    <h5 class="font-size-20 mx-3 font-Ubuntu">Shopping Cart</h5>
    <!-- Shopping cart items starts here-->
    <div class="row">
      <div class="col-sm-8">
        <?php
        foreach ($product->getData('cart') as $item) :
          $cart = $product->getProduct($item['item_id']);
          $sub_total[] = array_map(function ($item) {
        ?>
            <!-- Cart item starts here-->
            <div class="row border-top py-3 mt-3">
              <div class="col-sm-2">
                <img src="<?php echo $item['item_image'] ?? "./Mobile Phone Images/6.png" ?>" alt="cart1" class="img-fluid" style="width:120px; height: 100px;">
              </div>
              <div class="col-sm-8">
                <h5 class="font-Ubuntu font-size-20"> <?php echo $item['item_name'] ?? "Unknown"; ?> </h5>
                <small> <?php echo $item['item_brand'] ?> </small>

                <!-- Product rating starts here-->
                <div class="d-flex">
                  <div class="rating text-warning font-size-12">
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="far fa-star"></i> </span>
                  </div>
                  <a href="#" class="px-2 font-size-14 font-WorkSans text-decoration-none">20,534 ratings</a>
                </div>
                <!-- Product rating ends here-->


                <!-- Product qty starts here-->
                <div class="qty d-flex py-2">
                  <div class="d-flex font-Rale w-25">
                    <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"> <i class="fas fa-plus px-2"></i></button>
                    <input type="text" data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty_input border px-2 w-100 bg-light font-Ubuntu" disabled value="1" placeholder="1">
                    <button class="qty-down border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"> <i class="fas fa-minus px-2"></i> </button>
                  </div>
                  <form method="post">
                    <input type="hidden" value="<?php echo $item['item_id'] ?? '0'; ?>" name="item_id">
                    <button type="submit" name="delete-cart-button" class="btn font-RaleWay text-danger px-3 border-end">Delete</button>
                  </form>

                  <form method="post">
                    <input type="hidden" value="<?php echo $item['item_id'] ?? '0'; ?>" name="item_id">
                  <button type="submit" name="wishlist-submit" class="btn font-RaleWay text-danger">Save for Later</button>
                  </form>


                </div>
                <!-- Product qty ends here -->

              </div>

              <div class="col-sm-2 text-right">
                <div class="font-size-20 text-danger font-Krub">
                  &#x20B9 <span class="product_price" data-id="<?php echo $item['item_id'] ?? '0';?>"><?php echo $item['item_price'] ?? "0"; ?> </span>
                </div>
              </div>
            </div>
            <!-- Cart item ends here -->
        <?php
            return $item['item_price'];
          }, $cart);   // Closing Array Map function
        endforeach;
        ?>

        <!-- Cart item starts here-->

        <!-- Cart item ends here -->
      </div>
      <!-- Sub total section starts here -->
      <div class="col-sm-4">
        <div class="sub-total border text-center mt-2 w-75">
          <h6 class="font-size-12 font-Ubuntu text-success py-3"> <i class="fas fa-check"></i> Your Order is eligible for FREE delivery</h6>
          <div class="border-top py-4">
            <h5 class="font-WorkSans font-size-20">Subtotal(<?php echo isset ($sub_total) ? count($sub_total) : '0'; ?>):&nbsp; <span class="text-danger">&#x20B9;</span> <span class="text-danger" id="deal-price"><?php echo isset($sub_total) ? $Cart->getSum($sub_total) : 0; ?> </span> </h5>
            <button type="submit" class="btn btn-warning mt-3 font-Ubuntu">Proceed to Buy</button>
          </div>
        </div>

      </div>
      <!-- Sub total section ends here -->
    </div>
    <!-- !Shopping cart items ends here -->
  </div>
</section>
<!-- Shopping cart section ends here -->