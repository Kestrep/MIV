/**
 * toggleActive
 * @param element
 * 
 */
function toggleActive() {
    this.classList.toggle('active');
}
function toggleWrapperActive() {
    this.querySelector('.wrapper').classList.toggle('active');
}

// Gestion du Hamburger

document.querySelector('#hamburger').addEventListener('click', ()=>{
    hamburgerMenu = document.querySelector('#hamburgerMenu');
    hamburgerMenu.classList.toggle('active');
})

// Gestion d'une team-card

document.querySelectorAll('.team-card').forEach( element => {
    element.addEventListener('click', toggleWrapperActive)
})