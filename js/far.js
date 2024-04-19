////////////////////////
/// far js
/// ////////////////////
console.log("js start");

var swiper = new Swiper(".swiper", {
  slidesPerView: 6,
  spaceBetween: 10,
  loop: true,
  autoplay: {
		delay: 3000,
	},
  breakpoints: {
     420: {
          slidesPerView: 2,
          spaceBetween: 20,
      },
      640: {
          slidesPerView: 3,
          spaceBetween: 30,
      },
      768: {
          slidesPerView: 3,
          spaceBetween: 30,
      },
      1024: {
          slidesPerView: 6,
          spaceBetween: 30,
      },
  },
});


// nav-main > nav-cta active when scrolled

// Listen for the scroll event on the window
window.addEventListener('scroll', function() {
    // Get the navigation element by its class name
    var navMain = document.querySelector('.nav-main');
    // var navLogo = document.querySelector('.nav-logo');

    // Check if the page is scrolled more than 400 pixels
    if (window.scrollY > 500) {
        // Add the 'nav-cta-active' class to the nav-main element
        navMain.classList.add('nav-cta-active');
        // navLogo.style.width = '100px';
    } else {
        // Remove the 'nav-cta-active' class if scrolled back up
        navMain.classList.remove('nav-cta-active');
        // navLogo.style.width = '150px';
    }
});

// nav-main enlarge home for seconds

// Wait for the DOM to fully load
document.addEventListener('DOMContentLoaded', (event) => {
  // Set a timeout to run after 5 seconds
  setTimeout(() => {
      // Find the element with the class 'nav-main-logo'
      const logoElement = document.querySelector('.nav-logo');
      
      // Check if the element exists to avoid null reference errors
      if (logoElement) {
          // Add the 'logo-smaller' class to the element
          logoElement.classList.add('logo-smaller');
      }
  }, 2000); // 5000 milliseconds = 5 seconds
});


// nav-main > nav-logo enlarged when on page over ons
document.addEventListener('DOMContentLoaded', function() {
    var targetClass = 'nav-logo-large';
    var navMain = document.getElementById('nav-main');

    function toggleNavClassBasedOnScroll() {
        // Check if the page's current scroll position is within the first 500px
        if (window.scrollY <= 500 && window.location.pathname === '/over-ons/') {
            // Ensure the element exists and doesn't already have the class
            if (navMain && !navMain.classList.contains(targetClass)) {
                navMain.classList.add(targetClass);
            }
        } else {
            // If scrolled beyond 500px, remove the class
            if (navMain && navMain.classList.contains(targetClass)) {
                navMain.classList.remove(targetClass);
            }
        }
    }

    // Call the function initially in case the page is already scrolled when loaded
    toggleNavClassBasedOnScroll();

    // Attach the function to window's scroll event
    window.addEventListener('scroll', toggleNavClassBasedOnScroll);
});

  // nav-sidebar 
  if(document.getElementsByClassName("nav-main")){
  
    let navMain = document.getElementById("nav-toggle");
    let navSidebar = document.getElementById("nav-sidebar");
    let navOverlay = document.getElementById("nav-sidebar-overlay");
  
    navMain.onclick = function(){
      navSidebar.classList.add('nav-open');
      navOverlay.classList.add('nav-overlay-open');
    };
  
    // When user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == navOverlay) {
      navSidebar.classList.remove('nav-open');
      navOverlay.classList.remove('nav-overlay-open');
    }
  } 
    }
  
    if(document.getElementById("nav-sidebar-toggle")){
    
      let toggleSidebar = document.getElementById("nav-sidebar-toggle");
      let navSidebar = document.getElementById("nav-sidebar");
      let navOverlay = document.getElementById("nav-sidebar-overlay");
  
      toggleSidebar.onclick = function(){
        console.log('nav-sidebar works');
        navSidebar.classList.remove('nav-open');
        navOverlay.classList.remove('nav-overlay-open');
      };
      }
  
  // toggle submenu    
  let hoofdMenu = document.querySelectorAll('.hoofd-menu');
  
  var myFunction = function() {
    var childNode = this.querySelector('.sub-menu');
    childNode.classList.toggle('open-submenu');
  };
  
  for (var i = 0; i < hoofdMenu.length; i++) {
    hoofdMenu[i].addEventListener('click', myFunction);
  }



console.log("js end");
