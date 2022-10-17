$(document).ready(function() {
  $('#sidenavbar-toggle').click(function(){
        $('.sidenavbar .sidenavbar-list').slideToggle();
    })
    $('#sidenavbar-toggle').on('click', function(){
        this.classList.toggle('active');
    });
    $('#datatable').DataTable();
});

window.onscroll = function() {stickNavbar()};
var navbar = document.getElementById("sidenavbar-wrapper");
var sticky = navbar.offsetTop;

function stickNavbar() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
