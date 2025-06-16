<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom CSS section -->
    <link rel="stylesheet" href="css/style.css?v=1.0.3">

    <!-- Bootstrap CSS section start here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Bootstrap CSS section end here -->

    <!-- Owl Carousel CSS section start here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  
    <!-- Owl Carousel CSS section end here -->
    <title>Neelam Infotech | Home</title>
</head>
<body>
    <!-- loader section start here-->
    <?php
        include "effect/loader.php";
    ?>
    <!-- loader section end here-->
    <div id="main-content" style="display: none;">
        <div id="sticky-header">
            <?php
                include "components/topbar.php";
            ?>
            <?php
                include "components/navbar.php";
            ?>
        </div>
        
        <?php 
            include 'components/main-carousel.php'; 
        ?>
        <?php
            include 'content/home-certificate.php';
        ?>
        <?php
            include 'content/vendor.php';
        ?>
        <?php
            include 'content/our-values.php';
        ?>
        <?php
            include 'content/testimonial.php';
        ?>
        <?php
            include 'content/cater.php';
        ?>
        <?php
            include 'content/awards.php';
        ?>
        <?php
            include 'content/event.php';
        ?>
        <?php
            include "components/footer.php";
        ?>
    </div>
    
    <!-- jQuery (must come before Owl Carousel JS) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    
    <!-- Custom Javascript section -->
    <script src="js/script.js"></script>
    
    <!-- Bootstrap Javascript section  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>