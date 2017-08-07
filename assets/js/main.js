

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


    const hamburger = document.getElementById('hamburger');
    const mobMenu = document.querySelector('.mob-menu');

    const stickyHeader = document.querySelector('.header--sticky');
    const isSticky = "is-sticky";

    // Sticky Trigger
    function stickyNav(){
        if (window.scrollY > stickyTrigger) {
            stickyHeader.classList.add(isSticky);
        } else {
            stickyHeader.classList.remove(isSticky);
        }
    }
    window.addEventListener('scroll', stickyNav);

    // Hamburger Menu
    window.addEventListener('click', function(){ 
        mobMenu.classList.toggle('menu-open');
        body.classList.toggle('menu-open');
        stickyHeader.classList.toggle('menu-open');
    });



    console.log('yo');
}, false);