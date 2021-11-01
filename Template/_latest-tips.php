<?php
//Tips
$tips = $product->getData('tips');
rsort($tips);
?>

<section id="tips" class="my-5 py-3">
    <h3 class="text-center">Latest Tips & Tricks</h3>
    <p class="text-center small m-0">Click <a href="tips-tricks.php">HERE</a> for more</p>

    <div class="container d-flex justify-content-center flex-wrap py-3">
        <?php for ($i = 0; $i < 3; $i++) { ?>
            <div class="item m-2 d-flex flex-column border" style="width: 18rem;">
                <div class="col-12 img-div" style="background-image: url('<?= $tips[$i]["imgUrl"] ?>');"></div>
                <div class="col-12 p-3">
                    <h5><?= $tips[$i]["title"] ?></h5>
                    <p class="small mb-0"><?= $tips[$i]["text"] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</section>