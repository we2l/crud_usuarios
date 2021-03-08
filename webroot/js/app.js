
function visualizarUsuario() {
    const button = document.querySelectorAll('.button-view');
    const modalContent = document.querySelector('.modal-content');
    const content = document.querySelector('.content h2');

    button.forEach((element)=> {
        element.addEventListener('click', (e)=> {
            e.preventDefault();
            content.innerText = "Dados do usuário";
            modalContent.style.width = '50%';
            openModal();
        })
    })
}

// function excluirUsuario() {
//     const button = document.querySelectorAll('.button-del');
//     const modalContent = document.querySelector('.modal-content');
//     const content = document.querySelector('.content');

//     button.forEach((element) => {
//         element.addEventListener('click', (e)=> {
//             e.preventDefault()
            
//             modalContent.style.width = '20%';
//             openModal();
//         })
//     })

// }

function openModal() {
    const modal = document.querySelector('.modal-container');
    const close = document.querySelector('.modal-content .close span');
    
    modal.style.display = "flex";
    
    close.addEventListener('click', (e)=> {
        e.preventDefault();
        modal.style.display = 'none';
    })
}
visualizarUsuario()
