<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Neelam Infotech</title>
</head>
<body>
    <!-- loader section start here-->
    <?php
        include "effect/loader.php";
    ?>
    <!-- loader section end here-->
    <div id="main-content" style="display: none;" class="bg-info">
        <div id="sticky-header">
            <?php
                include "components/topbar.php";
            ?>
            <?php
                include "components/navbar.php";
            ?>
        </div>
        
        <?php include 'components/main-carousel.php'; ?>
        Home page
        <?php
        include "components/footer.php";
        ?>
    </div>
    
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>