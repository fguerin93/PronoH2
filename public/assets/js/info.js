const icon = document.querySelector('.info')
const infoContainer = document.querySelector('.container-informations')
const cross = document.querySelector('.cross')
const body = document.querySelector('.home-container')

let infoIsOpen = false

icon.addEventListener('click', () =>
{
    infoContainer.classList.toggle('active')
})

cross.addEventListener('click', () =>
{
    infoContainer.classList.toggle('active')
})

