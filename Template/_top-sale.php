 <?php
  shuffle($product_shuffle);
  $product_shuf = $product->getData();

  // Request Method Post
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['top_sale_submit'])) {
      // Call method Add to Cart
      $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
  }
  ?>

<div id="top-sale-section">


 <section id="top-sale">
   <div class="container py-5">
     <h3 class="font-size-20 font-Ubuntu">Top Sale</h3>
     <hr>
     <!-- Top Sale Carousel -->
     <div class="owl-carousel owl-theme">
       <?php
        $iterator = 0;
        foreach ($product_shuf as $item) {
          if ($iterator == 20) break;
        ?>
         <div class="item py-2">
           <div class="product font-Rubik">
             <a href=" product.php? item_id=<?php echo $item['item_id']; ?>"><img src="<?php echo $item['item_image'] ?? "./product_images/1.png" ?>" alt="product1" class="img-fluid"></a>
             <div class="text-center">
               <h6> <?php echo $item['item_name'] ?? "Unknown" ?> </h6>
               <div class="rating text-warning font-size-12">
                 <span> <i class="fas fa-star"></i> </span>
                 <span> <i class="fas fa-star"></i> </span>
                 <span> <i class="fas fa-star"></i> </span>
                 <span> <i class="fas fa-star"></i> </span>
                 <span> <i class="far fa-star"></i> </span>
               </div>
               <div class="price py-3">
                 <span> <b> &#x20B9;</b> <?php echo $item['item_price'] ?? "0" ?></span>
               </div>
               <form method="POST">
                 <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                 <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                 <!-- <?php
                  // if (in_array($item['item_id'], $Cart->getCartId($product->getData(table: 'cart')))) {
                  //   echo '<button type="submit" disabled class="btn btn-success form-control font-size-12 font-Rubik" onclick="display_message()" style="width: fit-content;">In the Cart</button>';
                  // } else {
                  //   echo '<button type="submit" name="top_sale_submit" class="btn btn-warning form-control font-size-12 font-Rubik" onclick="display_message()" style="width: fit-content;">Add to Cart</button>';
                  // }
                  ?>  -->
                  <button type="submit" name="top_sale_submit" class="btn btn-warning form-control font-size-12 font-Rubik" onclick="display_message()" style="width: fit-content;">Add to Cart</button>
                </form>
                  

             </div>
           </div>
         </div>
       <?php $iterator++;
        } ?>
     </div>
     <!-- Top Sale Carousel -->
   </div>
 </section>
</div>

 <!-- Top Sale ALL starts here-->

 <script>
   let btn = document.getElementsByClassName('btn');

   function display_message() {
     alert("A new Item has been successfully added into the cart.")
   }
 </script>