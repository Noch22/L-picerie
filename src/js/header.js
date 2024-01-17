document.addEventListener("DOMContentLoaded", function() {
    if(document.querySelector('.header-homepage.homepage') !== null){
    var menu = document.getElementsByClassName("header-homepage homepage");
    var menu = document.querySelector(".header-homepage.homepage");
  
    window.addEventListener("scroll", function() {
      if (window.scrollY > 50) { // Vous pouvez ajuster cette valeur selon vos besoins
        menu.classList.add("scrolled");
      } else {
        menu.classList.remove("scrolled");
      }
    });
  }});