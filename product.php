<?php
ob_start();

include 'header.php';

$product_id = $_GET['id'] ?? 1;

//request method post
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['products_submit'])) {
    //call method add to cart
    $cart->addToCart($_POST['customerId'], $_POST['productId']);
}

foreach ($product_shuffle as $item) :
    if ($item['productId'] == $product_id) :
?>

        <!-- Product info -->
        <section id="product-info">
            <div class="container py-5 d-flex flex-column flex-lg-row-reverse flex-lg-row">
                <div class="product-text col-12 col-lg-6 my-3">
                    <h1><?= $item['name'] ?? "???" ?></h1>
                    <p class="my-2 mid-text bold"><?= $item['price'] ?? "0.00" ?><span class="mid-text bold">€</span></p>
                    <?php if ($item['category'] != "Accessory") { ?>
                        <p class="my-2">Botanical name: <span class="italic"><?= $item['botName'] ?? "Cool latin phrase" ?></span></p>
                        <div class="care-icons d-flex my-4 big">
                            <div class="text-center me-3">
                                <img src="assets/icons/sun-<?= $item['sun'] ?? 1 ?>.svg" alt="sunshine-icon" class="icon">
                            </div>
                            <div class="text-center me-3">
                                <img src="assets/icons/temp-<?= $item['temperature'] ?? 1 ?>.svg" alt="temperature-icon" class="icon">
                            </div>
                            <div class="text-center me-3">
                                <img src="assets/icons/water-<?= $item['water'] ?? 1 ?>.svg" alt="water-icon" class="icon">
                            </div>
                        </div>
                    <?php } ?>
                    <h5>Description</h5>
                    <p><?= $item['description'] ?? "You'll have to find out on your own..." ?></p>
                    <form method="post">
                        <input type="hidden" name="productId" value="<?= $item['productId']?>">
                        <input type="hidden" name="customerId" value="<?= $_COOKIE["customerId"]?>">
                        <?php
                        if (in_array($item['productId'], $cartProductsIds)) {
                            echo '<button class="btn btn-secondary btn-sm" disabled>already in cart</button>';
                        } else {
                            echo '<button name="products_submit" class="btn btn-success btn-sm">add to cart</button>';
                        }
                        ?>
                    </form>
                </div>
                <div class="product-img col-12 col-lg-6 my-3 pe-3">
                    <img src="<?= $item['imgUrl'] ?? "assets/products/not-found.svg" ?>" alt="product">
                </div>
            </div>
        </section>
        <!-- Product info -->

<?php
    endif;
endforeach;
?>

<!-- Similar products -->
<?php include 'Template/_similar-products.php' ?>
<!-- !Similar products -->

<?php include 'footer.php' ?>