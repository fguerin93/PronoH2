const icon = document.querySelector('.info')
const infoContainer = document.querySelector('.container-informations')
const cross = document.querySelector('.cross')
const body = document.querySelector('.home-container')

let infoIsOpen = false

icon.addEventListener('click', () =>
{
    if (!infoIsOpen)
    {
        infoContainer.style.display = "block"
        body.style.opacity = "0.4"
        cross.addEventListener('click', () =>
        {
            infoContainer.style.display = "none"
            body.style.opacity = "1"
        })
    }

    else
    {
        infoContainer.style.display = "none"
        body.style.opacity = "1"
    }
    infoIsOpen = !infoIsOpen
})

