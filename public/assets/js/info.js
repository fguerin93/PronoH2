const icon = document.querySelector('.info')
const infoContainer = document.querySelector('.container-informations')
const cross = document.querySelector('.cross')
const background = document.querySelector('.background-div')

let infoIsOpen = false

icon.addEventListener('click', () =>
{
    infoContainer.classList.toggle('active')
    background.classList.toggle('active')
})


cross.addEventListener('click', () =>
{
    infoContainer.classList.toggle('active')
    background.classList.toggle('active')
})

