////////////////////////
/// far js
/// ////////////////////

console.log("js start");
// Listen for the scroll event on the window
window.addEventListener('scroll', function() {
    // Get the navigation element by its class name
    var navMain = document.querySelector('.nav-main');

    // Check if the page is scrolled more than 400 pixels
    if (window.scrollY > 500) {
        // Add the 'nav-cta-active' class to the nav-main element
        navMain.classList.add('nav-cta-active');
    } else {
        // Remove the 'nav-cta-active' class if scrolled back up
        navMain.classList.remove('nav-cta-active');
    }
});
console.log("js end");
