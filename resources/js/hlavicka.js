var btn = document.getElementById("menu");
btn.onclick = function () {
    var x = document.getElementById("myTopnav");
    var y = document.getElementById("hlavicka");
    var z = document.getElementById("boxik");
    if (x.className === "topnav") {
    x.className += " responsive";
} else {
    x.className = "topnav";
}
    if (y.className === "hlavicka") {
    y.className += " hlavna";
} else {
    y.className = "hlavicka";
}
    if (z.className === "dropdown-content") {
        z.className += " hamburger";
    } else {
        z.className = "dropdown-content";
    }
}
const pageUrl = window.location.href;
let pageName = pageUrl.split('.')[0].split('/');
pageName = pageName[pageName.length - 1]
let element = document.getElementById(pageName);
element.classList.add("active");


