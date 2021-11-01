<?php
shuffle($product_shuffle);

//add to cart
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['similar_products_submit'])) {
    //call method add to cart
    $cart->addToCart($_POST['customerId'], $_POST['productId']);
}
?>

<section id="similar-products" class="my-5 py-3">
    <div class="container">
        <h3 class="text-center">You may also like</h3>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item) { ?>
                <div class="item py-2">
                    <div class="product m-3">
                        <a href="product.php?id=<?= $item['productId'] ?? "" ?>">
                            <img src="<?= $item['imgUrl'] ?? "assets/products/cacti-mix-2.png" ?>" alt="product">
                        </a>
                        <div class="text-center">
                            <h6 class="my-1"><?= $item['name'] ?? "Nothing" ?></h6>
                            <p class="mb-1"><?= $item['price'] ?? "0.00" ?></span></p>
                            <form method="post">
                                <input type="hidden" name="productId" value="<?= $item['productId'] ?? 1 ?>">
                                <input type="hidden" name="customerId" value="<?= $_COOKIE["customerId"] ?? 1 ?>">
                                <?php
                                if (in_array($item['productId'], $cartIdArr)) {
                                    echo '<button class="btn btn-secondary btn-sm" disabled>already in cart</button>';
                                } else {
                                    echo '<button name="similar_products_submit" class="btn btn-success btn-sm">add to cart</button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } //closing forearch function
            ?>
        </div>
        <!-- !owl carousel -->
    </div>
</section>