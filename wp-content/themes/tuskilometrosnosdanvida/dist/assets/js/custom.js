// Nav
let navTrigger = document.getElementById("nav-trigger");
let nav = document.getElementById("navbar");
let navStatus = false;

var mediaqueryMin = window.matchMedia("(min-width: 993px)");
if (mediaqueryMin.matches) {
  // Nav
  navTrigger.addEventListener("click", function() {
    let navHeight = nav.offsetHeight;
    navTrigger.classList.toggle("active");
    if (navStatus == false) {
      navStatus = true;
      nav.style.height = "100%";
      window.setTimeout(() => {
        nav.style.width = "400px";
      }, 400);
    } else {
      navStatus = false;
      nav.style.width = "80px";
      window.setTimeout(() => {
        nav.style.height = navHeight;
      }, 400);
    }
  });

  // Nav scroll
  let prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
    if (!navStatus) {
      var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        nav.style.height = "100%";
      } else {
        nav.style.height = "0%";
      }
      prevScrollpos = currentScrollPos;
    }
  };

  // Footer
  window.addEventListener("scroll", function() {
    let footer = document.getElementById("footer");
    let footerHeight = footer.offsetHeight;
    let body = document.getElementById("body");
    let bodyHeight = body.offsetHeight;
    let scrollPosition = window.scrollY + 720;
    let calc = bodyHeight - footerHeight;
    if (scrollPosition >= calc) {
      body.classList.add("end");
    } else {
      body.classList.remove("end");
    }
  });
}

var mediaqueryMax = window.matchMedia("(max-width: 992px)");
if (mediaqueryMax.matches) {
  navTrigger.addEventListener("click", function() {
    navTrigger.classList.toggle("active");
    if (navStatus == false) {
      nav.style.width = "100%";
      nav.style.height = "450px";
      navStatus = true;
    } else {
      nav.style.width = "80px";
      nav.style.height = "80px";
      navStatus = false;
    }
  });
}

// Swipper
let swiper = new Swiper(".swiper-container", {
  slidesPerView: 5,
  spaceBetween: 30,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    clickable: true
  },
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 0
    }
  }
});
