<style>
/* owl carousel section start here */
.owl-carousel .item {
  display: flex;
  justify-content: center;   /* horizontally centre the img  */
  align-items:   center;     /* vertically   centre the img  */
  padding: 10px;             /* optional breathing-space     */
}

.award_img {
  height:200px;
  object-fit:cover;
  border-radius:10px;
  object-fit: cover;
  border-left: 3px solid #275EFE;
  border-bottom: 3px solid #275EFE;
  border-radius: 10px;
  box-shadow: 0 2px 6px #275EFE;
}
</style>
<!-- Our Value section start here -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.05s">
    <div class="container text-center py-5">
        <div class="container text-center">
            <div class="section-title section-title-sm text-center">
                <h3 class="fw-bold text-primary text-uppercase">Awards</h3>
            </div>
            <div class="award-carousel owl-carousel">
            <div class="item">
                <img class="award_img" src="./image/award 1.png" alt="Award 1">
            </div>
            <div class="item">
                <img class="award_img" src="./image/award 2.png" alt="Award 2">
            </div>
            <div class="item">
                <img class="award_img" src="./image/award 3.png" alt="Award 3">
            </div>
            <div class="item">
                <img class="award_img" src="./image/award 4.png" alt="Award 4">
            </div>
            <div class="item">
                <img class="award_img" src="./image/award 5.png" alt="Award 5">
            </div>
            <div class="item">
                <img class="award_img" src="./image/award 6.png" alt="Award 6">
            </div>
            <div class="item">
                <img class="award_img" src="./image/award 7.png" alt="Award 7">
            </div>
            <div class="item">
                <img class="award_img" src="./image/award 8.png" alt="Award 8">
            </div>
            <div class="item">
                <img class="award_img" src="./image/award 9.png" alt="Award 9">
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Value section end here -->

<script>
    // award carousel section start here
$(document).ready(function () {
  $(".award-carousel").owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 1000,     // Time between slides
    autoplaySpeed: 1000,       // 🟢 Duration of slide animation (in ms)
    smartSpeed: 1000,          // 🟢 Duration for manual navigation/drag
    autoplayHoverPause: true,
    responsive: {
            0: {
            items: 1
            },
            576: {
            items: 2
            },
            768: {
            items: 3
            },
            992: {
            items: 4
            }
        }
    });
});
// award carousel section end here
</script>