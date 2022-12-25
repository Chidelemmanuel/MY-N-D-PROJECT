// var backdrop = document.querySelector('.backdrop');
// var modal = document.querySelector('.modal');
// var allbuttons = document.querySelector('.btnyyy');
const togglebutton = document.getElementsByClassName('toggle-button')[0]
const list = document.getElementsByClassName('list')[0]

togglebutton.addEventListener('click', () => {
    list.classList.toggle('active')
})

// console.log(allbuttons);
// // backdrop.style.display = 'block';
// // for (var i = 0; i < allbuttons.length; i++) {
// //     allbuttons[i].addEventListener('click', function() {
// //         modal.style.display = 'block';
// //         backdrop.style.display = 'block';
// //     });
// // }

// backdrop.addEventListener('click', (e) => {
//     e.preventDefault()
//     modal.style.display = 'none';
//         backdrop.style.display = 'none';
// })

// allbuttons.addEventListener('click', (e) => {
//     e.preventDefault()
//     modal.style.display = 'block';
//         backdrop.style.display = 'block';
//         console.log('hj')
// })