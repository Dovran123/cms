"use strict";
var slides =  document.querySelectorAll(".ini");
var left = document.querySelector(".lava");
var right = document.querySelector(".prava");
let cur = 0;
let max = slides.length;

const goToSlide = function (slide) {
    slides.forEach(
        (s, i) => (s.style.transform = `translateX(${100 * (i - slide)}%)`)
    );
};
goToSlide(0);
// Next slide
right.addEventListener('click', function (e){
e.preventDefault();
    if (cur === max - 1) {
        cur = 0;
    } else {
        cur++;
    }
    goToSlide(cur);
});
left.addEventListener('click', function (e){
    e.preventDefault();
    if (cur === 0) {
        cur = max - 1;
    } else {
        cur--;
    }
    goToSlide(cur);
});
