$(document).ready(function() {
  $('#navbar-toggle').click(function(){
        $('.navbar .navbar-list').slideToggle();
    })
    $('#navbar-toggle').on('click', function(){
        this.classList.toggle('active');
    });
});

window.onscroll = function() {stickNavbar()};
var navbar = document.getElementById("navbar-wrapper");
var sticky = navbar.offsetTop;

function stickNavbar() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
