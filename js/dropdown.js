let dropdown = document.querySelector('.menu'), //ul
submenu = document.querySelector('.nub-menu'), //ul li a
buttonclick = document.querySelector('.check-button'), //button
hamburger = document.querySelector('.menu-icon');

buttonclick.addEventListener('click', () => {
    dropdown.classList.toogle('show-dropdown');
    
} )