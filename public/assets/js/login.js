const connexion = document.querySelector('.container-connexion')
const deconnexion = document.querySelector('.container-deconnexion')
const iconOpen = document.querySelector('.icon-connexion')

const connexionValue = document.querySelector('.hidden')

let connexionIsOpen = false
let deconnexionIsOpen = false

iconOpen.addEventListener('click', () =>
{
    console.log(connexionValue.textContent)

    if (connexionValue.textContent=='false')
    {
        if(!connexionIsOpen) 
        {
            connexion.style.display = "block"
        }
        else 
        {
            connexion.style.display = "none"
        }
        connexionIsOpen = !connexionIsOpen
    }
    if (connexionValue.textContent=='true')
    {
        if(!deconnexionIsOpen) 
        {
            deconnexion.style.display = "block"
        }
        else 
        {
            deconnexion.style.display = "none"
        }
        deconnexionIsOpen = !deconnexionIsOpen
    }
})
