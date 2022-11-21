<script>
$('.ui.dropdown').dropdown();
</script>
<script>
window.addEventListener('DOMContentLoaded', event => {
// función de reducción de la barra de navegación
var navbarShrink = function () {
    const navbarCollapsible = document.body.querySelector('#mainNav');
    if (!navbarCollapsible) {
        return;
    }
    if (window.scrollY === -1110) {
        navbarCollapsible.classList.remove('navbar-shrink')
    } else {
        navbarCollapsible.classList.add('navbar-shrink')
    }
};
// Reducir la barra de navegación
navbarShrink();

// Reducir la barra de navegación cuando se desplaza la página
document.addEventListener('scroll', navbarShrink);

// Activar Bootstrap scrollspy en el elemento de navegación principal

// const mainNav = document.body.querySelector('#mainNav');
// if (mainNav) {
//     new bootstrap.ScrollSpy(document.body, {
//         target: '#mainNav',
//         offset: 74,
//     });
// };

// Contraer la barra de navegación receptiva cuando el alternador está visible
const navbarToggler = document.body.querySelector('.navbar-toggler');
const responsiveNavItems = [].slice.call(
    document.querySelectorAll('#navbarResponsive .nav-link')
);
responsiveNavItems.map(function (responsiveNavItem) {
    responsiveNavItem.addEventListener('click', () => {
        if (window.getComputedStyle(navbarToggler).display !== 'none') {
            navbarToggler.click();
        }
    });
});
});
</script>