const onSearch = document.querySelector('#search-box')
const searchvalue = document.querySelector('#searchvalue')

onSearch.addEventListener('submit', (e) => {
    e.preventDefault()
    if(searchvalue.value !== ''){
        e.target.submit()
    }
}) 