var backdrop = document.querySelector('.backdrop');
var modal = document.querySelector('.modal');
var allbuttons = document.querySelector('.btnyyy');
const togglebutton = document.getElementsByClassName('toggle-button')[0]
const list = document.getElementsByClassName('list')[0]

// modal.style.display = 'none';

allbuttons.addEventListener('click', (e) => {
    e.preventDefault()
    modal.style.display = 'block';
    backdrop.style.display = 'block';
})

backdrop.addEventListener('click', (e) => {
    e.preventDefault()
    modal.style.display = 'none';
    backdrop.style.display = 'none';
})