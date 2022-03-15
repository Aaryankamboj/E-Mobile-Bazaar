<?php
include('header.php');
?>


<?php
// Include Cart template if it is not empty
count($product->getData('cart')) ? include('Template/_cart-template.php'): include('Template/notFound/_cartNotFound.php');
// Include Cart template if it is not empty


count($product->getData('wishlist')) ? include('Template/_wishlist-template.php'): include('Template/notFound/_wishlist-not-found.php');


include('Template/_new-phones.php');
// include('Template/proceed-to-buy.php');
?>


<?php
include('footer.php');
?>