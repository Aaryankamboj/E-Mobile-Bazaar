$(document).ready(function () {
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
    // Isotope filter
    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows',
        filter: '.MostViewed'
    })


    // Filter items on button click
    $(".button-group").on("click", "button", function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    })





    // New phones owl Carousael
    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    // Blogs owl carousel

    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    });

    // Product Qty sectionss    
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");
    // let $input=$(".qty_input");

    // Click event on qty up button
    $qty_up.click(function (e) {
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);
        //  Change Product price using AJAX CALL method
        $.ajax({
            url: "Template/ajax.php", type: 'POST', data: { itemid: $(this).data("id") }, success: function (result) {
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];
                if ($input.val() >= 1 && $input.val() <= 9) {
                    $input.val(function (i, oldval) {
                        return ++oldval;
                    });                  

                    // Increase the Price of the Product
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));
                    // Set Subtotal
                    let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));

                }
        }}); // Closing AJAX Request

    });

    // Click event on qty down button
    $qty_down.click(function (e) {
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if ($input.val() > 1 && $input.val() <= 10) {
            $input.val(function (i, oldval) {
                return --oldval;
            })
        }
    });




});
