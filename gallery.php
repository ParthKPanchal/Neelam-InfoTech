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
    <title>Neelam Infotech | Gallery</title>
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
        <!-- background name display section start here -->
        <div class="aiheaderimage">
            <img src="./image/Tally Pime backgrornd image.png"  class="header-image">
            <h1 class="title">Gallery</h1>
        </div>
        <!-- background name display section end here -->
        
        <!-- Accordion section start here -->
        <div class="accordion-background">
            <div class="container">
                <div class="accordion-container">
                    <div class="accordion-button active" data-target="#image1">All</div>
                    <div class="accordion-button" data-target="#image2">Awards</div>
                    <div class="accordion-button" data-target="#image3">Event</div>
                </div>
                <div id="image3" class="image-container" style="display: block;"> <!-- Show Events images by default -->
                    <div class="image-grid">
                        <img class="event_img" src="./image/event1.jfif" alt="event 1">
                        <img class="event_img" src="./image/event2.jfif" alt="event 2">
                        <img class="event_img" src="./image/event3.jfif" alt="event 3">
                        <img class="event_img" src="./image/event4.jfif" alt="event 4">
                        <!-- This will go on the next row -->
                    </div>
                </div>
                <div id="image2" class="image-container">
                    <div class="image-grid">
                        <img class="award_img" src="./image/award 1.png" alt="Award 1">
                        <img class="award_img" src="./image/award 2.png" alt="Award 2">
                        <img class="award_img" src="./image/award 3.png" alt="Award 3">
                        <img class="award_img" src="./image/award 4.png" alt="Award 4">
                        <img class="award_img" src="./image/award 5.png" alt="Award 5">
                        <img class="award_img" src="./image/award 6.png" alt="Award 6">
                        <img class="award_img" src="./image/award 7.png" alt="Award 7">
                        <img class="award_img" src="./image/award 8.png" alt="Award 8">
                        <img class="award_img" src="./image/award 9.png" alt="Award 9">
                        
                        <!-- This will go on the next row -->
                    </div>
                </div>
                <div id="image1" class="image-container">
                    <div class="image-grid">
                        <img class="event_img" src="./image/event1.jfif" alt="event 1">
                        <img class="event_img" src="./image/event2.jfif" alt="event 2">
                        <img class="event_img" src="./image/event3.jfif" alt="event 3">
                        <img class="event_img" src="./image/event4.jfif" alt="event 4">
                        <img class="award_img" src="./image/award 1.png" alt="Award 1">
                        <img class="award_img" src="./image/award 2.png" alt="Award 2">
                        <img class="award_img" src="./image/award 3.png" alt="Award 3">
                        <img class="award_img" src="./image/award 4.png" alt="Award 4">
                        <img class="award_img" src="./image/award 5.png" alt="Award 5">
                        <img class="award_img" src="./image/award 6.png" alt="Award 6">
                        <img class="award_img" src="./image/award 7.png" alt="Award 7">
                        <img class="award_img" src="./image/award 8.png" alt="Award 8">
                        <img class="award_img" src="./image/award 9.png" alt="Award 9">
                        <!-- This will go on the next row -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Accordion section end here -->
        <?php
        include "components/footer.php";
        ?>
        </div>
        <script>
  document.addEventListener("DOMContentLoaded", () => {
    // Ensure default state is set correctly
    const defaultButton = document.querySelector(".accordion-button.active");
    if (defaultButton) {
      const target = defaultButton.getAttribute("data-target");
      document.querySelector(target).style.display = "block";
    }
  });

  document.querySelectorAll(".accordion-button").forEach((button) => {
    button.addEventListener("click", () => {
      // Check if the button is already active
      const isActive = button.classList.contains("active");
      console.log("Button clicked:", button.textContent);
      console.log("Is active:", isActive);

      // Remove active class from all buttons and hide all images
      document.querySelectorAll(".accordion-button").forEach((btn) => {
        btn.classList.remove("active");
        console.log("Removed active from:", btn.textContent);
      });
      document
        .querySelectorAll(".image-container")
        .forEach((img) => (img.style.display = "none"));

      // If the clicked button was not active, activate it and show the images
      if (!isActive) {
        button.classList.add("active");
        console.log("Added active to:", button.textContent);
        const target = button.getAttribute("data-target");
        document.querySelector(target).style.display = "block";
      }
    });
  });
</script>
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
