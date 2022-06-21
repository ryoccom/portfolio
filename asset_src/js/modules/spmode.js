const menuTrigger = document.querySelector('.header__button');
const moveMenu = document.querySelector('.header');

function btnClick(){
    moveMenu.classList.toggle('js-spmode');
}

menuTrigger.addEventListener('click', btnClick);