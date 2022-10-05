var controller = document.getElementById("controller");
var mobile_nav = document.getElementById("mobile_nav");

controller.addEventListener("click", (e) => {
  mobile_nav.classList.toggle("toggleNav");
});
