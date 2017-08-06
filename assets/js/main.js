

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
    const stickyTrigger = 480;

    const stickyHeader = document.querySelector('#headerSticky');
    const isSticky = "is-sticky";

    function scrollNav(){
        console.log(window.scrollY);
    }

    function stickyNav(){
        if (window.scrollY > 480) {
            // stickyHeader.classList.add("stickkky");
        } else {
            // stickyHeader.classList.toggle(isSticky);
        }
    }

    window.addEventListener('scroll', stickyNav);
    body.classList.add('Working!');

    console.log('yo');
});