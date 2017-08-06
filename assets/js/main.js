$(function(){

    // Makes Hamburger Menu Work
    $('#hamburger').click(function(){
        $('.nav-menu').slideToggle(350);
    });
    
    // Sticky Nav on Scrol

    $(window).scroll(function(){

        var offsetPadding = $('.header').outerHeight(true);
        

        if ($(this).scrollTop() > 480){ 
            $('.header').addClass("header--sticky");
            $('body').addClass('is-scrolling');
            $('.hero').addClass('hero--scrolling');
            $('#Logo-Black').addClass('scrolling-logo');
        }
        else{
            $('.header').removeClass("header--sticky");
            $('body').removeClass('is-scrolling');
            $('.hero').removeClass('hero--scrolling');
            $('#Logo-Black').removeClass('scrolling-logo')
        }
    });
});

const body = document.body;
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementsByClassName('nav-menu');
// const mobMenu = document.querySelector('mob-menu');

function mobMenu(){
    if ( body.classList.contains('menu-open')) {
        // body.classList.toggle('menu-open');
        mobMenu.classList.toggle('menu-open');
    } else {
        body.classList.toggle('menu-open');
        // mobMenu.classList.toggle('menu-open');
    }
};

hamburger.addEventListener('click', mobMenu);



const headerHeight = document.querySelector('.header');