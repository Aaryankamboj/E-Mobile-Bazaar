$(document).ready(function(){
    $("#top-sale .owl-carousel").owlCarousel({
    loop:true,
    nav:true, 
    dots:false, 
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        }, 
        1000:{
            items:5
        }
    }
});
// Isotope filter
var $grid=$(".grid").isotope({
    itemSelector:'.grid-item',
    layoutMode:'fitRows',
    filter:'.MostViewed'
})


// Filter items on button click
$(".button-group").on("click","button", function(){
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({filter:filterValue});
})





// New phones owl Carousael
$("#new-phones .owl-carousel").owlCarousel({
    loop:true,
    nav:false, 
    dots:true, 
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        }, 
        1000:{
            items:5
        }
    }
});

// Blogs owl carousel

$("#blogs .owl-carousel").owlCarousel({
    loop:true,
    nav:false, 
    dots:true, 
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        }
    }
})

// Product Qty section

let $qty_up = $(".qty .qty-up");
let $qty_down= $(".qty .qty-down");
// let $input=$(".qty_input");

// Click event on qty up button
$qty_up.click(function(e){
    // Change Product Price using AJAX call method
    let $input=$(`.qty_input[data-id='${$(this).data("id")}']`);
    let $price=$(`.product_price[data_id='${$(this).data("id")}]`);

    $.ajax({URL :"Template/ajax.php", typeof:'POST', data:{item_id:$(this).data("id")}, success:function(result){
        let obj=JSON.parse(result);
        let item_price =obj[0]['item_price'];
        if($input.val()>=1 && $input.val()<=9){
            $input.val(function(i, oldval){
                return ++oldval;
            })
        }
        // Increase the price of the product
        $price.text(parseInt(item_price * $input.val()).toFixed(2));
    }}); // closing ajax request



    // let $input=$(`.qty_input[data-id='${$(this).data("id")}']`);
    // if($input.val()>=1 && $input.val()<=9){
    //     $input.val(function(i, oldval){
    //         return ++oldval;
    //     })
    // }
});

// Click event on qty down button
$qty_down.click(function(e){
    let $input=$(`.qty_input[data-id='${$(this).data("id")}']`);
   if($input.val()>1 && $input.val()<=10){
        $input.val(function(i, oldval){
            return --oldval;
        })
    }
});

});
