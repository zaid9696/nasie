
const hasChild = document.querySelectorAll('.menu-item-has-children');
const navBar = document.querySelector('.custom-wordpres-dropdown');
const menuButton = document.querySelector('.custom-btn');
const cancelButton = document.querySelector('.cancel-btn');

// console.log(zaid_starterUri.root_theme_uri);

// adding arrow to items who has child
const child = hasChild.forEach(item => {

	item.insertAdjacentHTML('beforeend', `<div class="nav-arrow"><img src="${zaid_starterUri.root_theme_uri}/img/down.svg" alt=""></div>`);

});


menuButton.addEventListener('click', (e) => {

	navBar.classList.add('show-custom-nav');

})
cancelButton.addEventListener('click', (e) => {

	navBar.classList.remove('show-custom-nav');

})