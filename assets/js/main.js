// MAIN SCRIPTS

// VARS
const body = document.body;
const wrapper = document.getElementById('wrapper');
const stickyTrigger = 560; // Pixel Height at which sticky nav triggers

const hamburger = document.querySelector('.menuToggle');
const mobMenu = document.querySelector('#mobMenu');

const stickyHeader = document.querySelector('.header--sticky');
const isSticky = "is-sticky";

const toTopBtn = document.getElementById('toTop');


// FUNCTIONS

// Mobile Menu Toggle
const mobMenuToggle = () => {
    hamburger.addEventListener('click', () => {
        mobMenu.classList.toggle('menu-open');
        wrapper.classList.toggle('menu-open');
    });
}

// Scroll to Top
const runScroll = () => {
    scrollTo(document.body, 0, 400);
}

// Show back to top button once user have scrolled down 33% of the page
const showBacktoTopBtn = () => {
    let pageHeight = window.innerHeight;

    toTopBtn.style.display = 'none';

    let displayBtn = () => {
        toTopBtn.style.display = "flex";
        toTopBtn.setAttribute("animation", "fadeIn .15s linear");
    }
    
    let toggleBtn = () => {
        let scrollPos = window.pageYOffset;
        scrollPos >= (pageHeight / 3) ? displayBtn : (toTopBtn.style.display = "none");
    }

    window.addEventListener('scroll', _.throttle(toggleBtn, 185));
}

// FontAwesome Config
// FontAwesomeConfig = { searchPseudoElements: true };

//  Doc Ready
document.addEventListener("DOMContentLoaded", function () {

    mobMenuToggle();

    // Scroll to Top
    runScroll();

    toTopBtn.addEventListener("click", runScroll, false);

    function scrollTo(element, to, duration) {
        if (duration <= 0) return;
        let difference = to - element.scrollTop;
        let perTick = difference / duration * 10;

        setTimeout(function () {
            element.scrollTop = element.scrollTop + perTick;
            if (element.scrollTop == to) return;
            scrollTo(element, to, duration - 10);
        }, 10);
    }

    // Show back to top button on scroll
    showBacktoTopBtn();

}, false);


// if sticky is showing, move sticky horiszontally
//else, don't move sticky