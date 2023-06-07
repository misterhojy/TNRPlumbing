// navbar.js
// switches navbar from before scroll to after scroll after passing top bar
window.addEventListener('scroll', function() {
    var navbarWrapper = document.getElementById('navbar-wrapper');
    var secondNavbar = navbarWrapper.querySelector('.my-navbar-before-scroll');
  
    var topBarHeight = document.querySelector('.my-top-bar').offsetHeight;
  
    if (window.pageYOffset > topBarHeight) {
      secondNavbar.classList.add('my-navbar-after-scroll');
    } else {
      secondNavbar.classList.remove('my-navbar-after-scroll');
    }
  });

  