 <?php
    $product_shuffle=$ts->getData();
 ?> 
  
 <!-- Top Sale ALL starts here-->
 <section id="top-sale"> 
    <div class="container py-5">
        <h3 class="font-size-20 font-Ubuntu">Top Sale</h3>
        <hr>
        <!-- Top Sale Carousel -->
        <div class="owl-carousel owl-theme">
          <?php foreach($product_shuffle as $item) {?>
          <div class="item py-2">
            <div class="product font-Rubik">
              <a href="product.php? item_id=<?php echo $item['item_id'];?>"><img src="<?php echo $item['item_image'] ??"./Mobile Phone Images/4.png"; ?>"  alt="product1" class="img-fluid"></a>
              <div class="text-center">
                <h6> <?php echo $item['item_name'] ?? "Unknown";?> </h6>
                <div class="rating text-warning font-size-12">
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="far fa-star"></i> </span>
                </div>
                <div class="price py-3">
                  <span> <b> &#x20B9;</b> <?php echo $item['item_price'] ?? '0';?></span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12 font-Rubik">Add to Cart</button>
              </div>
            </div>       
          </div>
         <?php } ?>
        </div>
        <!-- Top Sale Carousel -->
    </div>
 </section>
