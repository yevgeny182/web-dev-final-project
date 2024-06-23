// SHOW || HIDE SIDEBAR
const openMenu = document.querySelector('#show-side')
const hideMenuIcon = document.querySelector('#hide-side')
const sideMenu = document.querySelector('#side-menu')

openMenu.addEventListener('click', function () {
  sideMenu.classList.add('active')
})

hideMenuIcon.addEventListener('click', function  () {
  sideMenu.classList.remove('active')
})

//