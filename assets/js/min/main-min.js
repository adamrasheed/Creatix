"use strict";document.addEventListener("DOMContentLoaded",function(){function e(){window.scrollY>n?s.classList.add(d):s.classList.remove(d)}var o=document.body,n=560,t=document.querySelector(".menuToggle"),c=document.querySelector("#mobMenu"),s=document.querySelector(".header--sticky"),d="is-sticky";t.addEventListener("click",function(){o.classList.toggle("menu-open"),console.log("howdy")}),window.addEventListener("scroll",e),console.log("yo")},!1);