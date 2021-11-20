<?php
rsort($product_shuffle);

//request method post
if($_SERVER['REQUEST_METHOD'] =='POST' && isset($_POST['new_products_submit'])){
    //call method add to cart
    $cart->addToCart($_POST['customerId'], $_POST['productId']);
}

?>

<section id="new-arrivals" class="my-5 py-3">
    <div class="container">
        <h3 class="text-center">New Arrivals</h3>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item) { ?>
                <div class="item py-2">
                    <div class="m-3">
                        <a href="product.php?id=<?= $item['productId'] ?? "" ?>">
                            <img src="<?= $item['imgUrl'] ?? "assets/products/not-found.svg" ?>" alt="product">
                        </a>
                        <div class="text-center">
                            <h6 class="my-1"><?= $item['name'] ?? "Nothing" ?></h6>
                            <p class="mb-1"><?= $item['price'] ?? "0.00" ?><span>€</span></p>
                            <form method="post">
                                <input type="hidden" name="productId" value="<?= $item['productId'] ?? 1 ?>">
                                <input type="hidden" name="customerId" value="<?= $_COOKIE["customerId"] ?? 1 ?>">
                                <?php 
                                    if(in_array($item['productId'],$cartProductsIds)){
                                        echo '<button class="btn btn-secondary btn-sm" disabled>already in cart</button>';
                                    } else{
                                        echo '<button name="new_products_submit" class="btn btn-success btn-sm">add to cart</button>';
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