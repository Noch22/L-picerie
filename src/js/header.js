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
}
});


if(document.querySelector('.mobile_btn') !== null){
  var menu = document.querySelector(".menu_mobile");
  var btn = document.querySelector(".mobile_btn");
  var close = document.querySelector(".close_menu_mobile");

  btn.addEventListener('click', () => {
    menu.classList.toggle('open');
})

close.addEventListener('click', () => {
  menu.classList.toggle('open');
});

document.addEventListener('mousedown', function(event) {
  var menu = document.querySelectorAll('.menu_mobile');
  console.log(event);

  // Vérifier si le clic est à l'intérieur de l'un des sidebars et que le sidebar est actif
  var isInsideSidebar = Array.from(menu).some(function(sidebar) {
      return sidebar.contains(event.target) && sidebar.classList.contains('open');
  });

  // Si le clic n'est pas à l'intérieur d'un sidebar actif, retirer la classe active
  if (!isInsideSidebar) {
      menu.forEach(function(sidebar) {
          if (sidebar.classList.contains('open')) {
              sidebar.classList.toggle('open');
          }
      });
  }
});



}


