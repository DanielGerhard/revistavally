// Menu
const toggleBtn = document.querySelector('[e-toggle-btn]');
const menu = document.querySelector('[e-menu]');
if (toggleBtn && menu) {

    // Abre/fecha menu
    toggleBtn.addEventListener('click', function (e) {
        e.stopPropagation();
        toggleBtn.classList.toggle('ativo');
        menu.classList.toggle('ativo');
    })


    // Métodos para fechar o menu
    document.addEventListener('click', function (event) {
        if (!menu.contains(event.target) && menu.classList.contains('ativo')) {
            menu.classList.remove('ativo')
            toggleBtn.classList.remove('ativo')
        }
    })

    document.addEventListener('keydown', function (event) {
        if (event.key === "Escape" && menu.classList.contains('ativo')) {
            menu.classList.remove('ativo')
            toggleBtn.classList.remove('ativo')
        }
    })
}

// Barra de pesquisa 
const headerSearchbar = document.querySelector('[e-header-searchbar]')
if (headerSearchbar) {
    const searchBtn = document.querySelector('[e-search-btn]')
    const searchbar = document.querySelector('[e-searchbar]')
    const clearSearchbar = document.querySelector('[e-clear-searchbar]')

    // Botões
    if (clearSearchbar) {
        clearSearchbar.addEventListener('click', function (event) {
            event.preventDefault()
            searchbar.value = null
            clearSearchbar.style.display = 'none'
            searchbar.focus()
        })

        searchbar.addEventListener('input', function (event) {
            if (searchbar.value) {
                clearSearchbar.style.display = 'block'
            }
            else {
                clearSearchbar.style.display = 'none'
            }
        })
    }

    // Abre barra de pesquisa
    if (searchBtn) {
        searchBtn.addEventListener('click', function (event) {
            if (!headerSearchbar.classList.contains('ativo')) {
                event.preventDefault()
                headerSearchbar.classList.add('ativo')
                searchbar.focus()
            }
        })
    }

    // Metodos de fechar a barra de pesquisa
    document.addEventListener('click', function (event) {
        if (!headerSearchbar.contains(event.target)) {
            headerSearchbar.classList.remove('ativo')
            document.activeElement.blur()
        }
    })
    
    document.addEventListener('keydown', function (event) {
        if (event.key === "Escape" && headerSearchbar.classList.contains('ativo')) {
            headerSearchbar.classList.remove('ativo')
            searchbar.value = null
            document.activeElement.blur()
        }
    })
}
