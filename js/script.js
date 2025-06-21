// loader section start here

window.addEventListener("load", () => {
  setTimeout(() => {
    document.querySelector(".loading-screen").style.display = "none"; // Hide loader
    document.getElementById("main-content").style.display = "block"; // Show main content
  }, 1000); // Adjust time as needed

window.addEventListener('load', () => {
    setTimeout(() => {
    document.querySelector('.loading-screen').style.display = 'none'; // Hide loader
    document.getElementById('main-content').style.display = 'block'; // Show main content
    }, 2000); // Adjust time as needed

});
// loader section end here

// Simulate WOW.js behavior on page load
        window.addEventListener('DOMContentLoaded', () => {
            const elements = document.querySelectorAll('.wow');
            elements.forEach(el => {
                el.classList.add('animate');
            });
        });

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    if (window.scrollY > 45) {
      navbar.classList.add("sticky-top", "shadow-sm");
    } else {
      navbar.classList.remove("sticky-top", "shadow-sm");
    }
  });


//   Wow animation effect section start here
window.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.wow');
    elements.forEach(el => {
        el.classList.add('animate');
    });
});
//   Wow animation effect section end here

// form section start here
const params  = new URLSearchParams(window.location.search);
const subject = params.get('sub');
if (subject) {
  document.getElementById('subject').value = subject;
}
// form section end here

// owl carousel section start here
$(document).ready(function () {

  $(".award-carousel").owlCarousel({

  $(".owl-carousel").owlCarousel({

    loop: true,
    margin: 20,
    nav: false,
    dots: true,
    autoplay: true,

    autoplayTimeout: 1000, // Time between slides
    autoplaySpeed: 1000, // 🟢 Duration of slide animation (in ms)
    smartSpeed: 1000, // 🟢 Duration for manual navigation/drag
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 2,
      },
      768: {
        items: 3,
      },
      992: {
        items: 4,
      },
    },
  });
});
// owl carousel section end here

// Testimonial carousel section start here
function equalizeTestimonialHeights() {
  var maxHeight = 0;
  $(".testimonial-item")
    .css("height", "auto")
    .each(function () {
      maxHeight = Math.max(maxHeight, $(this).outerHeight());
    })
    .height(maxHeight);
}

$(function () {
  $(".testimonial-carousel").on(
    "initialized.owl.carousel resized.owl.carousel refreshed.owl.carousel",
    function () {
      setTimeout(equalizeTestimonialHeights, 100);
    }
  );

  $(".testimonial-carousel").owlCarousel({
    loop: true,
    margin: 20,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplaySpeed: 800,
    smartSpeed: 800,
    dots: true,
    responsive: {
      0: { items: 1, center: false },
      576: { items: 1, center: true },
      768: { items: 2, center: true },
      992: { items: 3, center: true },
    },
  });
});
// Testimonial carousel section end here

    autoplayTimeout: 1000,     // Time between slides
    autoplaySpeed: 1000,       // 🟢 Duration of slide animation (in ms)
    smartSpeed: 1000,          // 🟢 Duration for manual navigation/drag
    autoplayHoverPause: true,
    responsive: {
            0: {
            items: 1
            },
            576: {
            items: 3
            },
            768: {
            items: 4
            },
            992: {
            items: 6
            }
        }
    });
});
// owl carousel section end here
 
// Testimonial carousel section start here 
function equalizeTestimonialHeights() {
  var maxHeight = 0;
  $('.testimonial-item').css('height', 'auto').each(function () {
    maxHeight = Math.max(maxHeight, $(this).outerHeight());
  }).height(maxHeight);
}

$(function () {
  $('.testimonial-carousel').on('initialized.owl.carousel resized.owl.carousel refreshed.owl.carousel', function () {
    setTimeout(equalizeTestimonialHeights, 100);
  });

  $('.testimonial-carousel').owlCarousel({
    loop:true,
    margin:20,
    autoplay:true,
    autoplayTimeout:3000,
    autoplaySpeed:800,
    smartSpeed:800,
    dots:true,
    responsive:{
        0:   {items:1,center:false},
        576: {items:1,center:true},
        768: {items:2,center:true},
        992: {items:3,center:true}
    }
  });
});
// Testimonial carousel section end here


