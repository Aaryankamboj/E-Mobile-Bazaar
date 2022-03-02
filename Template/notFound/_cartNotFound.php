
<section id="cart" class="py-3 mb-5">
  <div class="container-fluid w-100 mx-3">
    <h5 class="font-size-20 mx-3 font-Ubuntu">Shopping Cart</h5>
    <!-- Shopping cart items starts here-->
    <div class="row">
      <div class="col-sm-8">
          <!-- Empty Cart starts here-->
           <div class="row border-top py-3 mt-3">
               <div class="col-sm-12 text-center py-2">
                   <img src="./assets/Blogs/empty_cart.png" alt="Empty cart" class="img-fluid" style="height: 200px;">
                   <p class="font-size-16 text-black-50 font-Rubik">Empty Cart</p>
               </div>
           </div>
          <!-- Empty Cart ends here -->
      

      </div>
      <!-- Sub total section starts here -->
      <div class="col-sm-4">
        <div class="sub-total border text-center mt-2 w-75">
          <h6 class="font-size-12 font-Ubuntu text-success py-3"> <i class="fas fa-check"></i> Your Order is eligible for FREE delivery</h6>
          <div class="border-top py-4">
            <h5 class="font-WorkSans font-size-20">Subtotal(<?php echo isset ($sub_total) ? count($sub_total) : '0'; ?>):&nbsp; <span class="text-danger">&#x20B9;</span> <span class="text-danger" id="deal-price"><?php echo isset($sub_total) ? $Cart->getSum($sub_total) : 0; ?> </span> </h5>
            <button type="submit" class="btn btn-warning mt-3 font-Ubuntu">Proceed to Buy</button>
          </div>
        </div>

      </div>
      <!-- Sub total section ends here -->
    </div>
    <!-- !Shopping cart items ends here -->
  </div>
</section>
<!-- Shopping cart section ends here -->