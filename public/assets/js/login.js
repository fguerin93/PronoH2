let connexion = document.querySelector('.container-login')
let iconOpen = document.querySelector('.icon-connexion')

let connexionIsOpen = false

iconOpen.addEventListener('click', () =>
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
})
