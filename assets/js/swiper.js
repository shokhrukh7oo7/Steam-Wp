// Glider configuration
const sliderElement = document.getElementById("slider");

if (sliderElement) {
  new Glider(sliderElement, {
    // Optional parameters
    slidesToShow: 1,
    slidesToScroll: 1,
    rewind: true,
    duration: 0.5,
    arrows: {
      prev: ".slider-prev",
      next: ".slider-next",
    },
    // Responsive breakpoints
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1.5,
          scrollLock: false,
          rewind: true,
        },
      },
    ],
  });
}

// swiper nasted swiper js
const sliderImages = document.querySelectorAll(".slider-image");

sliderImages.forEach((sliderImage) => {
  const topImg = sliderImage.querySelector(".switcher-top img");
  const bottomImgs = sliderImage.querySelectorAll(".switcher-bottom img");

  bottomImgs.forEach((img) => {
    img.addEventListener("click", () => {
      topImg.src = img.src;
    });
  });
});
//

// view modal image switcher
const switcherBottom = document.querySelectorAll(".switcher-bottom img");
const switcherTop = document.querySelector(".switcher-top img");

switcherBottom.forEach((img) => {
  img.addEventListener("click", (e) => {
    switcherTop.src = img.src;
  });
});
switcherTop.addEventListener("click", (e) => {
  e.target.requestFullscreen();
});
