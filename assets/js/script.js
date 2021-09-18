//Nécessaire pour Simple.parallax.js
let image = document.getElementsByClassName("thumbnail");
new simpleParallax(image);
//Animation on scrolll
AOS.init();
//Trigger loader
const loader = document.querySelectorAll(".to-animate");
console.log(loader);
console.log(loader.length);
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      for (let index = 0; index < loader.length; index++) {
        loader[index].classList.add("progress");
      }
      return;
    }
  });
});

observer.observe(document.querySelector(".section-to-animate"));
