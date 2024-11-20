console.log('JavaScript file is loaded');
const menuBtn = document.getElementById('menu-btn');
const menu = document.getElementById('menu');
var navbar = document.getElementById('nav');
var sticky = menu.offsetTop;

console.log("js init")

menuBtn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
    menu.classList.toggle("animate-slide-down");
});

document.addEventListener('click', (e) =>{
    if(!menu.contains(e.target) && !menuBtn.contains(e.target)) {
        menu.classList.add('hidden');
        menu.classList.remove("animate-slide-down");
    }
});

function onSticky() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add('fixed', 'top-0', 'w-full', 'z-50', 'bg-blue-800')
    }
    else {
        navbar.classList.remove('fixed', 'top-0', 'w-full', 'z-50', 'bg-blue-800')
    }
}

window.onscroll = function() {
    onSticky();
};

document.getElementById('deadpool').addEventListener('click', () => {
    window.location.href = "https://www.youtube.com/watch?v=73_1biulkYk";
})

document.getElementById('spiderman').addEventListener('click', () => {
    window.location.href = "https://www.youtube.com/watch?v=rk-dF1lIbIg";
})

