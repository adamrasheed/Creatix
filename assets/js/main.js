

// const body = document.body;
// const hamburger = document.getElementById('hamburger');
// const navMenu = document.getElementsByClassName('nav-menu');
// // const mobMenu = document.querySelector('mob-menu');

// function mobMenu(){
//     if ( body.classList.contains('menu-open')) {
//         // body.classList.toggle('menu-open');
//         mobMenu.classList.toggle('menu-open');
//     } else {
//         body.classList.toggle('menu-open');
//         // mobMenu.classList.toggle('menu-open');
//     }
// };


// hamburger.addEventListener('click', mobMenu);


//  Doc Ready
document.addEventListener("DOMContentLoaded", function() {

    const body = document.body;
    const stickyTrigger = 560;

    const stickyHeader = document.querySelector('.header--sticky');
    const isSticky = "is-sticky";

    function scrollNav(){
        console.log(window.scrollY);
    }

    function stickyNav(){
        if (window.scrollY > stickyTrigger) {
            console.log('should be sticky!');
            stickyHeader.classList.add(isSticky);
            // stickyHeader.classList.add("stickkky");
        } else {
            // stickyHeader.classList.toggle(isSticky);
            stickyHeader.classList.remove(isSticky);
        }
    }

    window.addEventListener('scroll', stickyNav);
    // body.className('Working!');

    console.log('yo');
}, false);