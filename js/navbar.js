var logo = document.querySelector(".logo");

var menu = document.querySelector(".menu");
var isActive = false;

var menuitems = document.querySelectorAll(".menuItem");
var mq = window.matchMedia("(max-width: 1036px)");

window.addEventListener("scroll", function() {
  var scrollOffset = window.scrollY;
  if (scrollOffset > 0) {
    logo.classList.add("scrolled");
    menu.classList.add("scrolled");
  } else if (scrollOffset === 0) {
    logo.classList.toggle("scrolled");
    menu.classList.toggle("scrolled");
  }
});

var hamburger = document.querySelector(".hamburger");

hamburger.addEventListener("click", function() {
  menu.classList.toggle("slideInDown");
});

if (matchMedia) {
  mq.addListener(WidthChange);
  WidthChange(mq);
}

// media query change
function WidthChange(mq) {
  if (!mq.matches) {
    menu.classList.toggle("slideInDown");
  }
}
