 <?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($ts->getData() as $item) :
        if($item['item_id'] == $item_id) :
    ?>
     <!-- Product Starts-->
     <section id="product" class="py-3">
         <div class="container">
             <div class="row">
                 <div class="col-sm-6">
                     <img src=" <?php echo $item['item_image'] ?? "./Mobile Phone Images/6.png"?> " alt="product" class="img-fluid">
                     <div class="form-row pt-4 font-size-16 btn-group d-flex">
                         <div class="col mx-1 flex-wrap">
                             <button type="submit" class="btn btn-danger form-control font-Ubuntu">Proceed to Buy</button>
                         </div>
                         <div class="col mx-1 flex-wrap">
                             <button type="submit" class="btn btn-warning form-control font-Ubuntu">Add to Cart</button>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-6 py-5">
                     <h5 class="font-size-20 font-Ubuntu"> <?php echo $item['item_name'] ??"Unknown";?> </h5>
                     <small class="font-Krub"> <?php echo $item['item_brand'] ??"Brand";?> </small>
                     <div class="d-flex">
                         <div class="rating text-warning font-size-12">
                             <span> <i class="fas fa-star"></i> </span>
                             <span> <i class="fas fa-star"></i> </span>
                             <span> <i class="fas fa-star"></i> </span>
                             <span> <i class="fas fa-star"></i> </span>
                             <span> <i class="far fa-star"></i> </span>
                         </div>
                         <a href="#" class="px-2 font-WorkSans font-size-14 text-decoration-none">10,438 ratings |
                             500+ answered questions</a>
                     </div>
                     <hr class="m-0">
                     <!-- Product Price starts here -->
                     <table class="my-3">
                         <tr class="font-Krub font-size-14">
                             <td>M.R.P</td>
                             <td> <strike>22,999</strike> </td>
                         </tr>
                         <tr class="font-Krub font-size-14">
                             <td>Deal Price</td>
                             <td class="font-size-20 text-danger">&nbsp; &#x20B9; <span> <?php echo $item['item_price'] ??"0";?> </span> <small class="font-size-14 text-dark">(inclusive of all taxes)</small> </td>
                         </tr>

                         <tr class="font-Krub font-size-14">
                             <td>You Save</td>
                             <td class="text-danger">&nbsp; &#x20B9; <span class="font-size-14 text-danger">1,999</span></td>
                         </tr>
                     </table>
                     <!-- Product Price ends here-->

                     <!-- Policy starts here -->
                     <div class="policy">
                         <div class="d-flex">
                             <div class="return text-center mr-5 px-4">
                                 <div class="font-size-20 my-2 color-second">
                                     <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                 </div>
                                 <a href="#" class="font-WorkSans font-size-14 text-decoration-none">10 Days <br>
                                     Replacement</a>
                             </div>

                             <div class="return text-center mr-5 px-4">
                                 <div class="font-size-20 my-2 color-second">
                                     <span class="fas fa-truck border p-3 rounded-pill"></span>
                                 </div>
                                 <a href="#" class="font-WorkSans font-size-14 text-decoration-none">E-Mobile
                                     Bazaar<br>Deleivered </a>
                             </div>

                             <div class="return text-center mr-5 px-4">
                                 <div class="font-size-20 my-2 color-second">
                                     <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                 </div>
                                 <a href="#" class="font-WorkSans font-size-14 text-decoration-none">1 Year <br>
                                     Warranty</a>
                             </div>
                         </div>
                     </div>
                     <!-- Policy ends here-->
                     <hr>
                     <!-- Order Details starts here-->
                     <div id="order-details" class="font-Krub d-flex flex-column text-dark">
                         <small class="font-Krub">Delivery by : Apr 25 - Apr 30</small>
                         <small class="font-Krub">Sold by <a href="#" class="text-decoration-none font-WorkSans"> &nbsp;E - Mobile Bazaar</a> (4.5
                             out of 5 | 15,404 ratings) </small>
                         <small class="font-Krub"> <i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp; Delivery to Customer
                             - 1100489 </small>
                     </div>
                     <!-- Order Details ends here -->
                     <div class="row">
                         <div class="col-6">
                             <!-- Color starts here -->
                             <div class="color my-3">
                                 <div class="d-flex justify-content-between">
                                     <h6 class="font-Krub">Color:</h6>
                                     <div class="bg-dark rounded-circle"> <button class="btn font-size-12 "></button>
                                     </div>
                                     <div class="bg-primary rounded-circle"> <button class="btn font-size-12"></button> </div>
                                     <div class="bg-danger rounded-circle"> <button class="btn font-size-12"></button> </div>
                                 </div>
                             </div>
                             <!-- !Color ends here-->

                         </div>
                         <div class="col-6">
                             <!-- Product Qty Section starts here-->
                             <div class="qty d-flex">
                                 <h6 class="font-Krub">Qty</h6>
                                 <div class="d-flex px-4 font-Rale">
                                     <button class="qty-up border bg-light px-2" data-id="pro1"> <i class="fas fa-plus"></i></button>
                                     <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light font-Ubuntu" disabled value="1" placeholder="1">
                                     <button class="qty-down border bg-light px-2" data-id="pro1"> <i class="fas fa-minus"></i>
                                     </button>
                                 </div>
                             </div>
                             <!-- Product Qty Section ends here-->


                         </div>

                     </div>
                     <!-- Size or RAM starts here -->
                     <div class="size my-3">
                         <h6 class="font-Krub my-3">Size</h6>
                         <div class="d-flex justify-content-between w-75">
                             <div class="font-Krub border p-2">
                                 <button class="btn p-0 font-size-14">4GB RAM </button>
                             </div>

                             <div class="font-Krub border p-2">
                                 <button class="btn p-0 font-size-14">6GB RAM </button>
                             </div>

                             <div class="font-Krub border p-2">
                                 <button class="btn p-0 font-size-14">8GB RAM </button>
                             </div>
                         </div>

                     </div>
                     <!-- Size or RAM ends here -->

                 </div>
                 <div class="col-12">
                     <h6 class="font-size-20 font-Ubuntu">Product Description</h6>
                     <hr>
                     <p class="font-Rale font-size-14">
                     <ul class="product_list font-Ubuntu">
                         <li> 64MP Triple Camera with Night Mode </li>
                         <li> FHD+ 90Hz Display</li>
                         <li>#BeFutureReady with 5G 12 bands support</li>
                         <li>5000mAh long-lasting battery with 15W in-box fast charger</li>
                     </ul>
                     </p>
                     <p class="font-Ubuntu font-size-14 font-weight-bold">
                         Turn your binge gaming sessions into exciting ones with the Samsung Galaxy F42. This phone
                         comes with an FHD Infinity-V display featuring a 90Hz display so that you can enjoy
                         life-like visuals in your game and get stutter-free scrolling that is smooth and effortless.
                         Also, this mobile phone is equipped with a powerful 5000 mAh battery that allows you to
                         capture stunning photos, connect with close friends, and do more throughout the day.
                         Moreover, thanks to the power-efficient Dimensity 700 processor Processor, you can indulge
                         in seamless multitasking.
                     </p>
                 </div>
             </div>

         </div>
     </section>
 <?php
  endif;
    endforeach;
    ?>