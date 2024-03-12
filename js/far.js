////////////////////////
/// far js
/// ////////////////////
console.log("js start");

// nav-main > nav-cta active when scrolled

// Listen for the scroll event on the window
window.addEventListener('scroll', function() {
    // Get the navigation element by its class name
    var navMain = document.querySelector('.nav-main');
    var navLogo = document.querySelector('.nav-logo');

    // Check if the page is scrolled more than 400 pixels
    if (window.scrollY > 500) {
        // Add the 'nav-cta-active' class to the nav-main element
        navMain.classList.add('nav-cta-active');
        navLogo.style.width = '100px';
    } else {
        // Remove the 'nav-cta-active' class if scrolled back up
        navMain.classList.remove('nav-cta-active');
        navLogo.style.width = '150px';
    }
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


console.log("js end");
