<?php
ob_start();
include 'header.php';

?>

<!-- Cart area -->
<section id="cart">
    <div class="container py-5 d-flex flex-column flex-column-reverse flex-lg-row">

        <?php
        if (count($customersCart) != 0) {
            include 'Template/_cart-items.php';
        } else {
            include 'Template/_empty-cart.php';
        }
        ?>

        <!-- Subtotal -->
        <div class="text-center my-2 ps-lg-3 col-lg-3">
            <div class="subtotal border py-3">
                <h5>Subtotal</h5>
                <p class="small">(<?= count($customersCart) ?> items)</p>
                <h4><span id="subtotal"><?= isset($subTotal) ? $cart->getSum($subTotal) : 0 ?></span> €</h4>
                <?php
                if (count($customersCart) != 0) {
                    echo '<button class="btn btn-success mt-1">proceed to buy</button>';
                } else {
                    echo '<button class="btn btn-secondary mt-1" disabled>proceed to buy</button>';
                }
                ?>
            </div>
        </div>
        <!-- !Subtotal -->
    </div>
</section>
<!-- !Cart area -->

<!-- New Arrivals -->
<?php include 'Template/_new-products.php' ?>
<!-- !New Arrivals -->

<?php include 'footer.php' ?>