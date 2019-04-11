const $matchesToSelect = document.querySelectorAll('.match-to-select')
const $inputMatchSelected = document.querySelector('.input-match-selected')

for(const $match of $matchesToSelect)
{
    $match.addEventListener('click', () =>
    {
        $match.classList.toggle('active')

        const selectedMatches = []

        for(const $match of $matchesToSelect)
        {
            if($match.classList.contains('active'))
            {
                selectedMatches.push($match.dataset.id)
            }
        } 
          
        $inputMatchSelected.value = selectedMatches.join(',')
    })
}