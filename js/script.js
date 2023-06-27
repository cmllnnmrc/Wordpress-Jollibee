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

const btnCart = document.querySelector('.btnCart');
const cart = document.querySelector('.cart');
const cartClose = document.querySelector('.cartClose');
const cartWrapper = document.querySelector('.cart__wrapper');
const count = document.querySelector('.count');
let cartArr = []

btnCart.addEventListener('click', ()=> {
    cart.classList.toggle('open');
})

cartClose.addEventListener('click', ()=> {
    cart.classList.toggle('open');
})


const btnAddtoCarts = document.querySelectorAll('.btnAddtoCart');

btnAddtoCarts.forEach((btn)=> {
    btn.addEventListener('click', (e)=> {
    e.target.parentElement;
    const cartInfo = {
        img: e.target.parentElement.querySelector('img').src,
        title: e.target.parentElement.querySelector('h4').textContent,
        price: e.target.parentElement.querySelector('p span').textContent,
    }

    cartArr.push(cartInfo)

    if(cartArr.length !== 0) {
        count.style.display = "flex";
        count.textContent = cartArr.length;
    }

    const cartItem = document.createElement('div');
    const div = document.createElement('div');
    cartItem.classList = "cart__item";
    const img = document.createElement('img')
    const h3 = document.createElement('h3')
    const span = document.createElement('span')

    
    img.setAttribute('src', e.target.parentElement.querySelector('img').src);
    h3.innerHTML = e.target.parentElement.querySelector('h4').textContent;
    span.innerHTML = e.target.parentElement.querySelector('span').textContent;

        cartItem.appendChild(img)
        div.appendChild(h3)
        div.appendChild(span)
        cartItem.appendChild(div)

        cartWrapper.appendChild(cartItem);
    })
})

