document.addEventListener("DOMContentLoaded", function() {
    var menu = document.querySelector(".header-homepage");
  
    window.addEventListener("scroll", function() {
      if (window.scrollY > 50) { // Vous pouvez ajuster cette valeur selon vos besoins
        menu.classList.add("scrolled");
      } else {
        menu.classList.remove("scrolled");
      }
    });
  });