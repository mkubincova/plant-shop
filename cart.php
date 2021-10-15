<?php include 'header.php' ?>

<!-- Cart area -->
<section id="cart">
    <div class="container py-5 d-flex flex-column flex-lg-row-reverse flex-lg-row">
        <!-- Subtotal -->
        <div class="text-center my-2 ps-lg-3 col-lg-3">
            <div class="subtotal border py-3">
                <h5>Subtotal</h5>
                <p class="small">(2 items)</p>
                <h4>24.00 <span>€</span> </h4>
                <button class="btn btn-success mt-1">proceed to buy</button>
            </div>

        </div>
        <!-- !Subtotal -->
        <!-- Cart items -->
        <div class="cart-items my-2 col-lg-9 mx-lg-2">
            <div class="item d-flex border-bottom py-3">
                <img src="assets/products/monstera-deliciosa.png" alt="product" style="max-height: 130px;">
                <div class="ps-3">
                    <h4>Name</h4>
                    <h5 class="mid-text my-0">12.00</h5>
                    <p class="small">(12.00 € / pc)</p>
                    <div class="d-flex">
                        <!-- product qty section -->
                        <div class="qty d-flex" style="width: min-content;">
                            <button class="qty-up border grey-bkg" data-id="1">
                                <i class="fas fa-angle-up"></i>
                            </button>
                            <input type="text" class="qty-input border px-3 bg-light text-center" data-id="1" disabled value="1" placeholder="1" style="width: 70px;">
                            <button class="qty-down border grey-bkg" data-id="1">
                                <i class="fas fa-angle-down"></i>
                            </button>
                        </div>
                        <!-- !product qty section -->
                        <button type="submit" class="btn btn-outline-danger small mx-3">
                            delete
                        </button>
                    </div>
                </div>
            </div>
            <div class="item d-flex border-bottom py-3">
                <img src="assets/products/violet.png" alt="product" style="max-height: 130px;">
                <div class="ps-3">
                    <h4>Name</h4>
                    <h5 class="mid-text my-0">12.00</h5>
                    <p class="small">(12.00 € / pc)</p>
                    <div class="d-flex">
                        <!-- product qty section -->
                        <div class="qty d-flex" style="width: min-content;">
                            <button class="qty-up border grey-bkg" data-id="2">
                                <i class="fas fa-angle-up"></i>
                            </button>
                            <input type="text" class="qty-input border px-3 bg-light text-center" data-id="2" disabled value="1" placeholder="1" style="width: 70px;">
                            <button class="qty-down border grey-bkg" data-id="2">
                                <i class="fas fa-angle-down"></i>
                            </button>
                        </div>
                        <!-- !product qty section -->
                        <button type="submit" class="btn btn-outline-danger small mx-3">
                            delete
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <!-- !Cart items -->
    </div>
</section>
<!-- !Cart area -->

<!-- New Arrivals -->
<?php include 'Template/_new-products.php' ?>
<!-- !New Arrivals -->

<?php include 'footer.php' ?>