import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init();

const menu = document.querySelector('.header__menu .menu');
const btn_menu_close = document.querySelector('.header__btn.close');

document.querySelector('.header__btn.open').addEventListener('click', function () {
    menu.classList.toggle('active');
    btn_menu_close.classList.toggle('active');
    document.querySelector('body').style.overflow = 'hidden';
});

btn_menu_close.addEventListener('click', function () {
    menu.classList.toggle('active');
    this.classList.toggle('active');
    document.querySelector('body').style.overflow = 'unset';
});