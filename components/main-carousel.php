<style>
  /* Ensure images are responsive and don't stretch the carousel */
.carousel-item img {
  width: 100%;
  height: auto;
  object-fit: cover;
  display: block;
}

/* Remove default full height of carousel */
.carousel-inner {
  height: auto;
}

/* Center arrows based on image height */
.carousel-control-prev,
.carousel-control-next {
  top: 50%;
  transform: translateY(-50%);
  height: auto;
}

/* Optional: Make sure control icons are visible and don't stretch */
.carousel-control-prev-icon,
.carousel-control-next-icon {
  background-size: 100% 100%;
}

@media (max-width: 576px) {
  .carousel-control-prev,
  .carousel-control-next {
    width: 30px;
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    width: 24px;
    height: 24px;
  }
}

</style>
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <!-- First Slide -->
    <div class="carousel-item active">
      <img src="./image/main-carousel1.png" class="d-block w-100" alt="First Slide">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="./image/main-carousel1.png" class="d-block w-100 carousel-img" alt="First Slide">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p> -->
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="./image/main-carousel2.png" class="d-block w-100" alt="Second Slide">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p> -->
      </div>
    </div>
    <!-- Second Slide -->
    <div class="carousel-item">
      <img src="./image/main-carousel2.png" class="d-block w-100" alt="Second Slide">
    </div>
  </div>

  <!-- Carousel Controls with Dark Border -->
  <button class="carousel-control-prev custom-control mx-3" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next custom-control mx-3" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>