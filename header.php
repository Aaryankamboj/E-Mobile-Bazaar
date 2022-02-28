<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Mobile Bazaar</title>
  <style>
    *{
      margin: 0;
      padding: 0;
    }
  </style>
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Owl Carousel CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--Font Awesome icons  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Custom CSS File -->
  <link rel="stylesheet" href="style.css">
  <?php 
  // Require functions.php file
  require('functions.php');
  ?>
</head>

<body>
  <!-- Start Header -->
  <header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
      <p class="font-WorkSans font-size-12 text-black-45 m-0">The Modern Communication Plaza, New Delhi 1100049</p>
      <div class="font-WorkSans font-size-14">
        <a href="#" class="px-4 border-right border-left text-dark">Login</a>
        <a href="#" class="px-4 border-right text-dark">WishList</a>
      </div>
    </div>

    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg px-4">
      <a class="navbar-brand font-WorkSans" href="#">E-Mobile Bazaar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav m-auto font-WorkSans">
          <li class="nav-item active">
            <a class="nav-link text-white" href="#">On-Sale</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Coming Soon</a>
          </li>
        </ul>
        <form action="#" class="font-size-14 font-Ubuntu">
          <a href="cart.php" class="py-2 rounded-pill color-primary-bg text-decoration-none">
            <span class="font-size-16 px-2 text-white"> <i class="fas fa-shopping-cart"></i> </span>
            <span class="px-3 py-2 rounded-pill text-dark bg-light "> <?php echo count($product->getData('cart')) ;?> </span>
          </a>
        </form>
      </div>
    </nav>
    <!-- !Primary Navigation -->
  </header>
  <!-- End Header -->

  <!-- ---------------------------------------------------------------------------------------------------------->

  <!-- Main Site -->
  <main id="main-site">