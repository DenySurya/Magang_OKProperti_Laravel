// NAVBAR FIXED
window.onscroll = function () {
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;

    if (window.pageYOffset > fixedNav) {
        header.classList.add('navbar-fixed');
    } else {
        header.classList.remove('navbar-fixed');
    }
};
// HAMBERGER
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');

hamburger.addEventListener('click', function () {
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});
// klik di luar hamburger
window.addEventListener('click', function (e) {
    if (e.target != hamburger && e.target != navMenu) {
        hamburger.classList.remove('hamburger-active');
        navMenu.classList.add('hidden');
    }
});
// darkmode
// const darkToggle = document.querySelector('#dark-toggle');
// function darkThemeToggle() {

//     if (localStorage.getItem("theme") === "dark") {
//         localStorage.setItem("theme", "light");
//         document.documentElement.classList.remove("dark");

//     } else {
//         localStorage.setItem("theme", "dark");
//         document.documentElement.classList.add("dark");
//     }
// }

// document.querySelector("button").addEventListener("click", darkToggle);

// if (localStorage.getItem("theme") === "dark") {
//     localStorage.setItem("theme", "light");
//     document.documentElement.classList.remove("dark");

// }

const darkToggle = document.querySelector('#dark-toggle');
const html = document.querySelector('html');


darkToggle.addEventListener('click', function () {
    // if (darkToggle.checked) {
    //     html.classList.add('dark');
    // } else {
    //     html.classList.remove('dark');
    // }
    if (localStorage.getItem("theme") === "dark") {
        localStorage.setItem("theme", "light");
        document.documentElement.classList.remove("dark");

    } else {
        localStorage.setItem("theme", "dark");
        document.documentElement.classList.add("dark");
    }
});
document.querySelector("button").addEventListener("click", darkToggle);

if (localStorage.getItem("theme") === "dark") {
    localStorage.setItem("theme", "light");
    document.documentElement.classList.add("dark");
}


// SLIDE IMAGE DETAIL PRODUK
const swiper = new Swiper('.swiper', {
    // Optional parameters
    speed: 400,
    spacebetween: 100,
    autoplay: {
        delay: 3000,
    },

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});

// filter
var openmodal = document.querySelectorAll('.modal-open')
for (var i = 0; i < openmodal.length; i++) {
    openmodal[i].addEventListener('click', function (event) {
        event.preventDefault()
        toggleModal()
    })
}

const overlay = document.querySelector('.modal-overlay')
overlay.addEventListener('click', toggleModal)

var closemodal = document.querySelectorAll('.modal-close')
for (var i = 0; i < closemodal.length; i++) {
    closemodal[i].addEventListener('click', toggleModal)
}

document.onkeydown = function (evt) {
    evt = evt || window.event
    var isEscape = false
    if ("key" in evt) {
        isEscape = (evt.key === "Escape" || evt.key === "Esc")
    } else {
        isEscape = (evt.keyCode === 27)
    }
    if (isEscape && document.body.classList.contains('modal-active')) {
        toggleModal()
    }
};


function toggleModal() {
    const body = document.querySelector('body')
    const modal = document.querySelector('.modal')
    modal.classList.toggle('opacity-0')
    modal.classList.toggle('pointer-events-none')
    body.classList.toggle('modal-active')
};
