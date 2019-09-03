window.addEventListener('load', () => {
    const preload = document.querySelector('.preload');
    preload.classList.add('preload-finish');
});

document.addEventListener('DOMContentLoaded', () => {
    function animateSgv (id, delay, delayIncrement){
        const logo = document.getElementById(id);
        const logoPaths = document.querySelectorAll(`#${id} path`);
        delay = delay;
        for(let i = 0; i < logoPaths.length;i++){
            //console.log(logoPaths[i].getTotalLength());
            logoPaths[i].style.strokeDasharray  = logoPaths[i].getTotalLength();
            logoPaths[i].style.strokeDashoffset = logoPaths[i].getTotalLength();
            logoPaths[i].style.animation = `line-anim 2s ease forwards ${delay}s`;
            delay+=delayIncrement;
            console.log(delay)
        }
        logo.style.animation = `fill 0.5s ease forwards ${delay}s`;
    }
    animateSgv('logo', 0, 0.5)
}, false);

const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');
    // toggle nav
    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');

        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
            }
        });

        burger.classList.toggle('toggle');

    });
};

navSlide();
