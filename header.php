<?php
$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$folder = "ict-110-final-project";
$base_path =  $protocol . "://" . $host . "/" . $folder . "/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant shop</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font-awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="https://<?= $_SERVER['HTTP_HOST']; ?>/ict-110-final-project/style.css?v=<?= time(); ?>" type="text/css">
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- header -->
    <header id="header">
        <!-- Main navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark primary-bkg">
            <div class="container">
                <a class="navbar-brand" href="<?= $base_path ?>index.php">
                    <i class="fas fa-leaf fa-flip-horizontal"></i>
                    Plant shop
                    <i class="fas fa-leaf"></i>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-link" href="<?= $base_path ?>products.php">Products</a>
                        <a class="nav-link" href="<?= $base_path ?>about.php">About us</a>
                        <a class="nav-link" href="<?= $base_path ?>tips-tricks.php">Tips & Tricks</a>
                    </div>
                    <a class="nav-link" href="<?= $base_path ?>cart.php">
                        <div style="position: relative; width: min-content;">
                            <span class="bigger"><i class="fas fa-shopping-basket dark-text"></i></span>
                            <div class="bg-warning text-center rounded-circle small cart-num dark-text">0</div>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
        <!-- !Main navigation -->
    </header>
    <!-- !header -->

    <!-- main -->
    <main id="main">