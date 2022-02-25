<?php
$product_shuffle = $product->getData();

// To add a new button automatically when a new product is added
$brand = array_map(function ($pro) {
    return $pro['item_brand'];
}, $product_shuffle);
$unique = array_unique($brand);

sort($unique);
?>

<!--Special Price starts here -->
<section id="special-price">
    <div class="container">
        <h4 class="font-size-20 font-Ubuntu">Special Price</h4>
        <div id="filters" class="button-group text-end font-WorkSans font-size-16 font-weight-bold">
            <button class="btn" data-filter=".MostViewed">Most Viewed</button>
            <button class="btn" data-filter=".Samsung, .Redmi, .Apple, .Oppo">All Brands</button>
            <button class="btn" data-filter=".Apple">Apple</button>
            <button class="btn" data-filter=".Samsung">Samsung</button>
            <button class="btn" data-filter=".Redmi">Redmi</button>
            <button class="btn" data-filter=".Oppo">Oppo</button>
            <?php
            
            ?>
        </div>

        <div class="grid">
            <!--Most Viewed  -->
            <?php array_map(function ($item) { ?>
                <div class="grid-item border <?php echo $item['item_brand'] ?? "Brand"; ?>  ">
                    <div class="item py-2 " style="width: 200px;">
                        <div class="product font-Rubik">
                            <a href="product.php?item_id=<?php echo $item['item_id']; ?>"><img src="<?php echo $item['item_image'] ?? "./Mobile Phone Images/14.png" ?>" alt="product1" class="img-fluid"> </a>
                            <div class="text-center">
                                <h6> <?php echo $item['item_name'] ?? "Unknown"; ?> </h6>
                                <div class="rating text-warning font-size-12">
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                </div>
                                <div class="price py-3">
                                    <span> <b>&#x20B9;</b> <?php echo $item['item_price'] ?? '0'; ?></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            <?php }, $product_shuffle) ?>
        </div>
    </div>
</section>

<!-- Special Price ends here -->