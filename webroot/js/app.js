function cadastrarUsuario() {
    const button = document.querySelector('.button-create');
    
    button.addEventListener('click', (e)=> {
        e.preventDefault();
        openModal();
    })

}

function visualizarUsuario() {
    const button = document.querySelectorAll('.button-view');
    
    button.forEach((element)=> {
        element.addEventListener('click', (e)=> {
            e.preventDefault();
            openModal();
        })
    })
}

function openModal() {
    const modal = document.querySelector('.modal-container');
    const close = document.querySelector('.modal-content .close span');
    
    modal.style.display = "flex";
    
    close.addEventListener('click', (e)=> {
        e.preventDefault();
        modal.style.display = 'none';
    })
}

cadastrarUsuario()
visualizarUsuario()