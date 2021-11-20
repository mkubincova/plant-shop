<?php
include 'header.php';
?>

<!-- Banner Area -->
<section id="banner-area">
    <div class="container py-5">
        <div class="banner-text m-auto text-center">
            <h1 class="text-warning">Welcome to Plant shop!</h1>
            <figure class="py-3">
                <blockquote class="blockquote">
                    <p class="pb-2">
                        <i class="fas fa-quote-left fa-xs text-warning"></i>
                        <span class="grey-text italic">A dried plant is nothing but a sign to plant a new one</span>
                        <i class="fas fa-quote-right fa-xs text-warning"></i>
                    </p>
                </blockquote>
                <figcaption class="blockquote-footer grey-text">
                    Priyansh Shah
                </figcaption>
            </figure>
            <a href="products.php"><button class="btn btn-warning btn-lg">explore!</button></a>
        </div>
    </div>
</section>
<!-- Banner Area -->

<!-- New Arrivals -->
<?php include 'Template/_new-products.php' ?>
<!-- !New Arrivals -->

<!-- Special offers -->
<?php include 'Template/_special-offers.php' ?>
<!-- !Special offers -->

<!-- Tips & Tricks -->
<?php include 'Template/_latest-tips.php' ?>
<!-- !Tips & Tricks -->

<?php include 'footer.php' ?>