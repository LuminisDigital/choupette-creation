
const burgerMenu = document.querySelector('.burger-menu');
const navMobile = document.querySelector('.nav-mobile');

burgerMenu.addEventListener('click', () => {
    burgerMenu.classList.toggle('active');
    navMobile.classList.toggle('active');
});
