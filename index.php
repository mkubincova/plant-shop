<?php 
include 'header.php';
?>

<!-- Banner Area -->
<section id="banner-area">
    <div class="container py-5">
        <div class="banner-text m-auto text-center">
            <h1 class="grey-text">Welcome to Plant shop!</h1>
            <p class="grey-text">Time to get a new plant baby :)</p>
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