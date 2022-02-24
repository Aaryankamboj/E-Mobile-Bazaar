<!-- New Phone Section starts here -->
<?php
   $newPhone = $ts->getData();   
?>
<section id="new-phones">
    <div class="container">
        <h4 class="font-size-20 font-Ubuntu">New Phones</h4>
        <hr>
        <div class="owl-carousel owl-theme">
            <?php foreach($newPhone as $item) {?>
            <div class="item py-2 bg-light">
                <div class="item py-2 " style="width: 200px;">
                    <div class="product font-Rubik">
                       <a href="product.php? item_id=<?php echo $item['item_id'];?>"><img src="<?php echo $item['item_image'] ??"./Mobile Phone Images/8.png"; ?>" alt="product1" class="img-fluid"> </a>
                        <div class="text-center">
                            <h6> <?php echo $item['item_name']?? "Unknown";?> </h6>
                            <div class="rating text-warning font-size-12">
                                <span> <i class="fas fa-star"></i> </span>
                                <span> <i class="fas fa-star"></i> </span>
                                <span> <i class="fas fa-star"></i> </span>
                                <span> <i class="fas fa-star"></i> </span>
                            </div>
                            <div class="price py-3">
                                <span><b> &#x20B9;</b> <?php echo $item['item_price'] ?? '0';?></span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

    </div>
</section>
<!-- New Phone Section ends here -->