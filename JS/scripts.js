// Nav Bar Variables
const navLogo = document.querySelector(".main-nav img");
const navButton = document.querySelector(".main-nav i");
const navBar = document.querySelector(".main-nav ul");
const navLinks = document.querySelectorAll(".main-nav li");
const x = window.matchMedia("(max-width: 599px)");

// Mobile Nav Bar JS
navButton.addEventListener("click", () => {
  if (navBar.style.display === "none" || navBar.style.display === "") {
    navBar.style.display = "block";
  } else if (navBar.style.display === "block") {
    navBar.style.display = "none";
  }
});

navLinks.forEach(link => {
  link.addEventListener("click", () => {
    if (x.matches) {
      navBar.style.display = "none";
    }
  });
});

// media query event handler
if (matchMedia) {
  const mq = window.matchMedia("(min-width: 600px)");
  mq.addListener(WidthChange);
  WidthChange(mq);
}

// media query change
function WidthChange(mq) {
  if (mq.matches) {
    navBar.style.display = "flex"; // window width is at least 600px
  } else {
    navBar.style.display = "none"; // window width is less than 600px
  }
}

// Variables for The Testimonials Carousel
const acheivementCarouselContainer = document.querySelectorAll(
  ".acheivement-item"
);
const carouselSwitch = document.querySelectorAll(".acheivement-switch");

// Event Listeners for The Testimonials Carousel
let carouselCounter = 1;
showContainer(carouselCounter);

function currentContainer(n) {
  showContainer((carouselCounter = n));
}

function showContainer(n) {
  for (let i = 0; i < acheivementCarouselContainer.length; i++) {
    acheivementCarouselContainer[i].style.display = "none";
    acheivementCarouselContainer[i].classList.remove("fast-fade-in-left");
    // carouselSwitch[i].classList.remove("active-carousel-switch");
  }

  if (carouselCounter > acheivementCarouselContainer.length) {
    carouselCounter = 1;
  }

  acheivementCarouselContainer[carouselCounter - 1].style.display = "block";
  acheivementCarouselContainer[carouselCounter - 1].classList.add(
    "fast-fade-in-left"
  );
  carouselSwitch[carouselCounter - 1].classList.add("active-carousel-switch");

  carouselCounter++;
  setTimeout(showContainer, 20000);
}

carouselSwitch.forEach((button, i) => {
  button.addEventListener("click", () => {
    currentContainer(i + 1);
  });
});
