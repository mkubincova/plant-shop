<?php
    //delete cart item
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_cart_item'])) {
        //call delete cart method
        $deletedItem = $cart->deleteCart($_POST['customerId'], $_POST['productId']);
    }
?>


<div class="cart-items my-2 col-lg-9 mx-lg-2">
    <!-- Cart item -->
    <?php
    foreach ($customerCart as $item) :
        $cart1 = $product->getProduct($item['productId']);
        $subTotal[] = array_map(function ($item) {
    ?>
            <div class="item d-flex border-bottom py-3">
                <img src="<?= $item['imgUrl'] ?? "assets/products/cacti-mix-2.png" ?>" alt="product" style="max-height: 130px;">
                <div class="ps-3">
                    <h4><?= $item['name'] ?? "Nothing" ?></h4>
                    <h5 class="mid-text my-0 price-to" data-id="<?= $item['productId'] ?>" ?><?= $item['price'] ?? 0.00 ?></h5>
                    <p class="small">(<span class="price-pc" data-id="<?= $item['productId'] ?>"><?= $item['price'] ?? 0.00 ?></span> € / pc)</p>
                    <div class="d-flex">
                        <!-- product qty section -->
                        <div class="qty d-flex" style="width: min-content;">
                            <button class="qty-up border grey-bkg" data-id="<?= $item['productId'] ?>">
                                <i class="fas fa-angle-up"></i>
                            </button>
                            <input type="text" class="qty-input border px-3 bg-light text-center" data-id="<?= $item['productId'] ?>" disabled value="1" placeholder="1" autocomplete=off style="width: 70px;">
                            <button class="qty-down border grey-bkg" data-id="<?= $item['productId'] ?>">
                                <i class="fas fa-angle-down"></i>
                            </button>
                        </div>
                        <!-- !product qty section -->
                        <form method="post">
                            <input type="hidden" name="productId" value="<?= $item['productId'] ?? 1 ?>">
                            <input type="hidden" name="customerId" value="<?= $_COOKIE["customerId"] ?? 1 ?>">
                            <button type="submit" name="delete_cart_item" class="btn btn-outline-danger small mx-3">
                                delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
    <?php
            return $item['price'];
        }, $cart1); //closing array map function
    endforeach;
    ?>
    <!-- !Cart item -->
</div>
