$(document).ready(function(){

    //new arrivals owl carousel
    $("#new-arrivals .owl-carousel").owlCarousel({
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
    })

    //similar products owl carousel
    $("#similar-products .owl-carousel").owlCarousel({
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
    })



    //isotope filter
    var grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    })

    //filter items on button click
    $(".button-group").on("click", "button", function(){
        var filterValue = $(this).attr('data-filter');
        grid.isotope({
            filter: filterValue
        })
        //add underline to current item filter
        $(".button-group>button.active-link").removeClass("active-link");
        $(this).addClass("active-link");
    })



    //product qty section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");

    //click event qty-up
    $qty_up.click(function(e){
        //get input field with data-id matching the clicked button
        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`); 
        if($input.val() >= 1 && $input.val() <= 19){
            $input.val(function(i,oldval){
                return ++oldval;
            })
        }
    })

    //click event qty-down
    $qty_down.click(function(e){
        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        if($input.val() > 1 && $input.val() <= 20){
            $input.val(function(i,oldval){
                return --oldval;
            })
        }
    })

});