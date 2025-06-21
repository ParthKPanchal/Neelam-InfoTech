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
        <h1 class="title">Contact us</h1>
      </div>
      <!-- background name display section end here-->
      
      <!-- contact section start here -->
      <div class="container py-5">
      <div class="text-center mb-4">
        <h3 class="section-title section-title-sm text-center text-primary">If You Have Any Query, Feel Free To Contact Us</h3>
      </div>
      <div class="row g-4">
        <!-- Contact Info Box -->
        <div class="col-lg-4">
          <!-- Phone -->
          <div class="d-flex rounded-3 p-3 align-items-center">
            <div class="bg-primary text-light rounded-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
              <i class="bi bi-telephone fs-2"></i>
            </div>
            <div class="ms-3 text-light">
              <h6 class="mb-1 text-primary">Call to ask any question</h6>
              <h5 class="mb-0 text-primary">+91 9324753025</h5>
            </div>
          </div>

          <!-- Email -->
          <div class="d-flex rounded-3 p-3 align-items-center mt-3">
            <div class="bg-primary text-light rounded-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
              <i class="bi bi-envelope-open fs-2"></i>
            </div>
            <div class="ms-3 text-light">
              <h6 class="mb-1 text-primary">Email to get free quote</h6>
              <h5 class="mb-0 text-primary">info@ajayinfotech.in</h5>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="col-lg-8">
          <form action="https://formspree.io/f/mnnvnwoa" method="POST" class="bg-white p-4 rounded-4 shadow-sm">
            <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" value="From Contact us" hidden>
            <div class="row g-3">
              <div class="col-md-6">
                <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
              </div>
              <div class="col-md-6">
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
              </div>
              <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
              </div>
              <div class="col-md-6">
                <input type="number" name="number" class="form-control" placeholder="Mobile Number" required>
              </div>
              <div class="col-md-6">
                <input type="text" name="company_name" class="form-control" placeholder="Company Name">
              </div>
              <div class="col-md-6">
                <input type="text" name="company_address" class="form-control" placeholder="Company Address">
              </div>
              <div class="col-md-12">
                <input type="text" name="license_number" class="form-control" placeholder="License Number">
              </div>
              <div class="col-12 d-grid">
                <button type="submit" class="btn btn-primary">Send the Request</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
        <!-- contact section end here -->
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
