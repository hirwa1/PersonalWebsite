
const navToggle = document.querySelector('.nav-toggle'); 
const navLinks = document.querySelectorAll('.nav__link'); 

navToggle.addEventListener('click', () => {

    document.body.classList.toggle('nav-open');
}); 

navLinks.forEach(link => {

    link.addEventListener('click', () => {

        document.body.classList.remove('nav-open');
    })
})

document.addEventListener("contextmenu", function(e){
    e.preventDefault();
}, false);

