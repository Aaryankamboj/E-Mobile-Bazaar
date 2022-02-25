<!-- // Include header.php file -->
<?php
ob_start();
include('header.php');
?>

<!-- Include banner area --> 
<?php
include('Template/_banner-area.php');
//  #Include banner area -->


//  Top Sale ALL starts here-->
include('Template/_top-sale.php');
//  ! Top Sale ALL ends-->

//  Special price starts here -->
include('Template/_special-price.php');
//  Special price ends here -->

//  Banner Ads
include('Template/_banner-adds.php');
//  Banner Ads Ends here

//  New Phone Section starts here 
include('Template/_new-phones.php');
//  New Phone Section ends here 

// Blgs starts here
include('Template/_blogs.php');
// Blogs ends here -->

// Include footer.php file
include('footer.php');
?>