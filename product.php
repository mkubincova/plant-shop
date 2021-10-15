<?php include 'header.php' ?>

<!-- Product info -->
<section id="product-info">
    <div class="container py-5 d-flex flex-column flex-lg-row-reverse flex-lg-row">
        <div class="product-text col-12 col-lg-6 my-3">
            <h1>Name</h1>
            <p class="my-2 mid-text bold">12.00 <span class="mid-text bold">€</span></p>
            <p class="my-2">Botanical name: <span class="italic">Some flower</span></p>
            <div class="care-icons d-flex my-4 big">
                <div class="border rounded-circle text-center me-3" style="width: 50px; height: 50px;">
                    <i class="fas fa-tint"></i>
                </div>
                <div class="border rounded-circle text-center me-3" style="width: 50px; height: 50px;">
                    <i class="fas fa-cloud-sun mr-3"></i>
                </div>
                <div class="border rounded-circle text-center me-3" style="width: 50px; height: 50px;">
                    <i class="fas fa-thermometer-quarter"></i>
                </div>
            </div>
            <h5>Description</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur sapiente, architecto, dignissimos molestiae vero harum, quo incidunt repellat ipsum adipisci quod. Nulla ipsam fugiat neque ducimus omnis? Delectus doloribus fugit amet esse enim harum deserunt ipsum, veritatis ipsa voluptate provident?</p>
            <button class="btn btn-success">add to cart</button>
        </div>
        <div class="product-img col-12 col-lg-6 my-3 pe-3">
            <img src="assets/products/violet.png" alt="product">
        </div>
    </div>
</section>
<!-- Product info -->

<!-- Similar products -->
<?php include 'Template/_similar-products.php' ?>
<!-- !Similar products -->

<?php include 'footer.php' ?>