<?php include 'header.php' ?>
<?php
rsort($product_shuffle);

//request method post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //call method add to cart
    $cart->addToCart($_POST['customerId'], $_POST['productId']);
}
?>

<div class="container my-5">
    <!-- Product filters -->
    <div id="filters" class="button-group text-center pb-3">
        <button class="btn is-checked active-link" data-filter="*">All products</button>
        <button class="btn" data-filter=".Flower">Flowers</button>
        <button class="btn" data-filter=".Leafy">Leafy plants</button>
        <button class="btn" data-filter=".Succulent">Succulents</button>
        <button class="btn" data-filter=".Accessory">Accessories</button>
    </div>
    <!-- !Product filters -->

    <!-- Product grid -->
    <div class="grid mx-auto">
        <?php foreach ($product_shuffle as $item) { ?>
            <div class="grid-item <?= $item['category'] ?? "" ?>">

                <div class="product p-2 border">
                    <a href="product.php?id=<?= $item['productId'] ?? "" ?>">
                        <img src="<?= $item['imgUrl'] ?? "assets/products/cacti-mix-2.png" ?>" alt="product">
                    </a>
                    <div class="text-center">
                        <h6 class="my-1"><?= $item['name'] ?? "Nothing" ?></h6>
                        <p class="mb-1"><?= $item['price'] ?? "0.00" ?><span>€</span></p>
                        <form method="post">
                            <input type="hidden" name="productId" value="<?= $item['productId'] ?? 1 ?>">
                            <input type="hidden" name="customerId" value="<?= $_COOKIE["customerId"] ?? 1 ?>">
                            <?php
                            if (in_array($item['productId'], $cartIdArr)) {
                                echo '<button class="btn btn-secondary btn-sm" disabled>already in cart</button>';
                            } else {
                                echo '<button name="products_submit" class="btn btn-success btn-sm">add to cart</button>';
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        <?php } //closing forearch function
        ?>
    </div>
    <!-- !Product grid -->

</div>

<?php include 'footer.php' ?>