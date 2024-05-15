//toggle class active//
const navbarNavigate = document.querySelector(".navbar-nav");

// ketika humberger menu di klick//
document.getElementById("hamburger-menu").onclick = () => {
    navbarNavigate.classList.toggle("active");
};

// let hamburger = document.getElementById("hamburger-menu");

// console.log(hamburger);
