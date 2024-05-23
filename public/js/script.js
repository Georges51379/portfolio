function toggleNavbar() {
    document.querySelector('.links-wrapper').classList.toggle('active');
    document.querySelector('.navbar-toggler').classList.toggle('active');
  }
  
  window.onscroll = function() {myFunction()};
  
  var navbar = document.querySelector('.navbar');
  var sticky = navbar.offsetTop;
  
  function myFunction() {
      if (window.pageYOffset >= sticky) {
          navbar.classList.add("fixed");
      } else {
          navbar.classList.remove("fixed");
      }
    }
