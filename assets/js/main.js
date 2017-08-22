

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
    const stickyTrigger = 560; // Pixel Height at which sticky nav triggers

    const hamburger = document.querySelector('.menuToggle');
    const mobMenu = document.querySelector('#mobMenu');

    const stickyHeader = document.querySelector('.header--sticky');
    const isSticky = "is-sticky";

    // Hamburger Menu
    hamburger.addEventListener('click', function(){
        // if(mobMenu.classList.contains('menu-open')) {
        //     this.classList.remove('menu-open');
        // } else {
        //     this.classList.add('menu-open');
        // }
        // mobMenu.classList.toggle('.menu-open');
        body.classList.toggle('menu-open');
        // stickyHeader.classList.toggle('menu-open');
        console.log('howdy');
    });

    // Sticky Trigger
    function stickyNav(){
        if (window.scrollY > stickyTrigger) {
            stickyHeader.classList.add(isSticky);
        } else {
            stickyHeader.classList.remove(isSticky);
        }
    }
    window.addEventListener('scroll', stickyNav);

    





    console.log('yo');
}, false);


// if sticky is showing, move sticky horiszontally
//else, don't move sticky