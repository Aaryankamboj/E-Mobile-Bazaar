<!-- New Phone Section starts here -->
<?php
$newPhone = $product->getData();
shuffle($newPhone);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['new_phones_submit'])) {
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
    // Call method Add to Cart
}

?>
<div id="new-phones-section">

<section id="new-phones">
    <div class="container">
        <h4 class="font-size-20 font-Ubuntu">New Phones</h4>
        <hr>
        <div class="owl-carousel owl-theme">
            <?php
            $iterator = 0;
            foreach ($newPhone as $item) {
                if ($iterator == 13) break;
            ?>
                <div class="item py-2 bg-light">
                    <div class="item py-2 " style="width: 200px;">
                        <div class="product font-Rubik">
                            <a href="product.php? item_id=<?php echo $item['item_id']; ?>"><img src="<?php echo $item['item_image'] ?? "assets/product_images/8.png"; ?>" alt="product1" class="img-fluid"> </a>
                            <div class="text-center">
                                <h6> <?php echo $item['item_name'] ?? "Unknown"; ?> </h6>
                                <div class="rating text-warning font-size-12">
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                </div>
                                <div class="price py-3">
                                    <span><b> &#x20B9;</b> <?php echo $item['item_price'] ?? '0'; ?></span>
                                </div>
                                <form method="POST">
                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                    <!-- <button type="submit" name="new_phones_submit" class="btn btn-warning font-size-12 font-Rubik" onclick="display_message()">Add to Cart</button> -->
                                    <?php
                                    // if (in_array($item['item_id'], $Cart->getCartId($product->getData(table: 'cart')))) {
                                    //     echo '<button type="submit" disabled class="btn btn-success form-control font-size-12 font-Rubik" onclick="display_message()" style="width: fit-content;">In the Cart</button>';
                                    // } else {
                                    //     echo '<button type="submit" name="new_phones_submit" class="btn btn-warning form-control font-size-12 font-Rubik" onclick="display_message()" style="width: fit-content;">Add to Cart</button>';
                                    // }
                                    ?>
                                    <button type="submit" name="new_phones_submit" class="btn btn-warning form-control font-size-12 font-Rubik" onclick="display_message()" style="width: fit-content;">Add to Cart</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                $iterator++;
            } ?>
        </div>

    </div>
</section>
</div>

<!-- New Phone Section ends here -->

<script>
    let btn = document.getElementsByClassName('btn');

    function display_message() {
        alert("A new Item has been successfully added into the cart.")
    }
</script>