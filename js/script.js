// loader section start here
window.addEventListener("load", () => {
  setTimeout(() => {
    document.querySelector(".loading-screen").style.display = "none"; // Hide loader
    document.getElementById("main-content").style.display = "block"; // Show main content
  }, 2000); // Adjust time as needed
});
// loader section end here

// Simulate WOW.js behavior on page load
window.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll(".wow");
  elements.forEach((el) => {
    el.classList.add("animate");
  });
});

// Sticky Navbar
$(window).scroll(function () {
  if ($(this).scrollTop() > 45) {
    $(".navbar").addClass("sticky-top shadow-sm");
  } else {
    $(".navbar").removeClass("sticky-top shadow-sm");
  }
});

// Dropdown on mouse hover
const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function () {
  if (this.matchMedia("(min-width: 992px)").matches) {
    $dropdown.hover(
      function () {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function () {
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
window.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll(".wow");
  elements.forEach((el) => {
    el.classList.add("animate");
  });
});
//   Wow animation effect section end here

// form section start here
const params = new URLSearchParams(window.location.search);
const subject = params.get("sub");
if (subject) {
  document.getElementById("subject").value = subject;
}
// form section end here

// owl carousel section start here
$(document).ready(function () {
  $("#owl-carousel").owlCarousel({
    loop: true,
    margin: 30,
    dots: true,
    nav: true,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      1024: {
        items: 5,
      },
    },
  });
});
// owl carousel section end here