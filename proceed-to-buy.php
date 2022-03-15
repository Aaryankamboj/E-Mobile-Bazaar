
<?php
include('header.php');
?>
<section id="cart" class="py-3 mb-5">
  <div class="container-fluid w-100 mx-3">
    <h5 class="font-size-20 mx-3 font-Ubuntu">Final Cart</h5>
    <!-- Shopping cart items starts here-->
    <div class="row">
      <div class="col-sm-8">
        <!-- <?php
        foreach ($product->getData('cart') as $item) :
          $cart = $product->getProduct($item['item_id']);
          $sub_total[] = array_map(function ($item) {
        ?> 
            <!-- Cart item starts here-->
            <div class="row border-top py-3 mt-3">
              <div class="col-sm-2">
                <img src="<?php echo $item['item_image'] ?? "./Mobile Phone Images/6.png" ?>" alt="cart1" class="img-fluid" style="width:120px; height: 100px;" >
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

      </div>
      <!-- Sub total section starts here -->
      
      <!-- Sub total section ends here -->
    </div>
    <!-- !Shopping cart items ends here -->
  </div>
</section>
<!-- Shopping cart section ends here -->