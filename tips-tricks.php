<?php 
include 'header.php';

//Tips
$tips = $product->getData('tips');
rsort($tips); 

?>

<div class="container my-5">

    <!-- Gardening tips & tricks -->
    <?php foreach($tips as $tip):?>
    <div class="item mx-2 my-3 d-flex flex-column flex-md-row border">
        <div class="col-12 col-md-6 col-lg-3 img-div" style="background-image: url('<?= $tip["imgUrl"]?>');"></div>
        <div class="col-12 col-md-6 col-lg-9 p-3">
            <h5><?= $tip["title"] ?></h5>
            <p><?= $tip["text"]?></p>
        </div>
    </div>
    <?php endforeach?>
    <!-- !Gardening tips & tricks -->

</div>

<?php include 'footer.php' ?>