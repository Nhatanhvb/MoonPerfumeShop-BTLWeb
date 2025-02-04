// Header scroll
const header = document.getElementById("header");
document.addEventListener("scroll", () => {
  if (window.scrollY > 0) {
    header.classList.add("scroll");
  } else {
    header.classList.remove("scroll");
  }
});


//click burger-menu 
const burger = document.getElementById('burger-menu');
burger.addEventListener('click', () => {
  burger.classList.toggle('is-active');
});