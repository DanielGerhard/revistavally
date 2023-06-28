const header = document.querySelector('[e-header]');
const assuntosHeader = document.querySelector('[e-assuntos-header]');
if (header) {
    const headerHeight = header.offsetHeight;
    let scrollHeight = window.scrollY;
    if (scrollHeight > headerHeight) {
        header.classList.add('fixado')
        assuntosHeader.classList.add('fixado')
    }
    window.addEventListener('scroll', function () {
        let scrollHeight = window.scrollY;

        if (scrollHeight > headerHeight) {
            header.classList.add('fixado')
            assuntosHeader.classList.add('fixado')
        } else {
            header.classList.remove('fixado')
            assuntosHeader.classList.remove('fixado')
        }
    });
}

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


// Swiper mais materias
if (typeof Swiper === 'function') {
    new Swiper("[e-swiper-materias]", {
        effect: 'slide',
        loop: true,
        preloadImages: false,
        lazy: true,
        slidesPerView: 1.5,
        spaceBetween: 24,
        navigation: {
            nextEl: '[e-swiper-materias-btn-prev]',
            prevEl: '[e-swiper-materias-btn-next]',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
        }
    })
}

const ajaxUrl = document.querySelector('#ajax-url').value

// Ver mais posts 
const botoesVerMais = document.querySelectorAll('[e-ver-mais]')
botoesVerMais.forEach(verMaisContainer => {
    let verMais = verMaisContainer.querySelector('button')
    verMais.addEventListener('click', function (evento) {
        evento.preventDefault()
        let spawnPointId = verMais.getAttribute('spawn-point')
        let spawnPoint = document.querySelector('#' + spawnPointId)
        action = verMais.getAttribute('action')
        pagina = verMais.getAttribute('pagina-atual') ? parseInt(verMais.getAttribute('pagina-atual')) + 1 : 2
        porPagina = verMais.getAttribute('por-pagina')
        queryType = verMais.getAttribute('query-type')
        query = verMais.getAttribute('query')

        fetch(ajaxUrl + '?action=' + action + '&pagina=' + pagina + '&query_type=' + queryType + '&query=' + query + '&por_pagina=' + porPagina)
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                spawnPoint.insertAdjacentHTML("beforebegin", data.html);
                verMais.setAttribute('pagina-atual', pagina + 1);

                if (!data.has_more_posts) {
                    verMaisContainer.remove();
                }
            })
    })
});

