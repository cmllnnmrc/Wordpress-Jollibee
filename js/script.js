const btnModal = document.querySelector('#btnModal');
const modal = document.querySelector('.modal');
const btnClose = document.querySelector('#btnClose');

if(btnModal && modal){
    btnModal.addEventListener('click', addShowClass);
    btnClose.addEventListener('click', removeShowClass);
}

function addShowClass() {
    modal.classList.add('show');
}

function removeShowClass() {
    modal.classList.remove('show');
}