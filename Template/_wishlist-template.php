<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['delete-submit-button'])) {
    $deleterecord = $Cart->deleteWish($_POST['item_id']);
  }
  if(isset($_POST['cart-submit-button'])){
    $Cart->saveForLater($_POST['item_id'], 'cart', 'wishlist');

  }
}
?>


<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-100 mx-3">
        <h5 class="font-size-20 mx-3 font-Ubuntu">Wishlist</h5>
        <!-- Shopping cart items starts here-->
        <div class="row">
            <div class="col-sm-8">
                <?php
                foreach ($product->getData('wishlist') as $item) :
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

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? '0'; ?>" name="item_id">
                                        <button type="submit" name="delete-submit-button" class="btn font-RaleWay text-danger ml-0 pr-3 border-end">Delete</button>
                                    </form>

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? '0'; ?>" name="item_id">
                                        <button type="submit" name="cart-submit-button" class="btn font-RaleWay text-danger ml-0 pr-3 ">Add to cart</button>
                                        

                                    </form>


                                </div>
                                <!-- Product qty ends here -->

                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-Krub">
                                    &#x20B9 <span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? "0"; ?> </span>
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
        </div>
    </div>
</section>
