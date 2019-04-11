const $img = document.querySelector('.container-404 img')
/**
 * Parallax cursor
 */

window.addEventListener('mousemove', (_event) =>
{
    const ratioX = _event.clientX / window.innerWidth - 0.5
    const ratioY = _event.clientY / window.innerHeight - 0.5
    
    const translateX = - 0.04 * ratioX * 100
    const translateY = - 0.04 * ratioY * 100

    $img.style.transform = `translate(${translateX}%, ${translateY}%)`
    
})



