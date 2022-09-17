$(document).ready(function() {
    $('.gallery-001').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        // other options
        gallery:{enabled:true}
    });
});

function scrollShadowHeader(){
    // Função para modificar o header e colocar uma sombra
    const header = document.querySelector('#header')
    const navHeight = header.offsetHeight

    if(window.scrollY >= navHeight) {
        header.classList.add('scroll')
    } else {
        header.classList.remove('scroll')
    }
}

function appearBackToTop(){
    // Função para aparecer o botão de voltar ao topo
    const backToTopButton = document.querySelector('#back-to-top')
    if(window.scrollY >= 560){
        backToTopButton.classList.add('show')
    }else{
        backToTopButton.classList.remove('show')
    }
}

function backToTop(){
    // função de click para retornar ao topo
    document.documentElement.scrollTop = 0
}

window.addEventListener('scroll', () => {
    scrollShadowHeader()
    appearBackToTop()
})