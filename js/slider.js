const arr = ["bestseller", "chickenjoy", "yamburger", "breakfast"];

for (var i = 0; i < arr.length; i++) {
    tns({
        container: `#${arr[i]}`,
        items: 4,
        gutter: 150,
        mouseDrag: true,
        controls: false,
        nav: false,
    });
}

const btnCart = document.querySelector('.btnCart');
const cart = document.querySelector('.cart');
const cartClose = document.querySelector('.cartClose');
const cartWrapper = document.querySelector('.cart__wrapper');
const count = document.querySelector('.count');
const total = document.querySelector('#total');
let cartArr = []


btnCart.addEventListener('click', ()=> {
    cart.classList.toggle('open');
    const btnXs = document.querySelectorAll('.cart__item button');

    btnXs.forEach((btn) => {
        btn.addEventListener('click', (e) => {
            e.target.parentElement.remove();
        })
    })
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
        price: Number(e.target.parentElement.querySelector('p span').textContent),
    }

    cartArr.push(cartInfo)

    const x =  cartArr.reduce((acc, curr)=>{
        return (acc + curr.price);
    }, 0)

    total.innerHTML = x;

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
    const button = document.createElement('button')

    
    img.setAttribute('src', e.target.parentElement.querySelector('img').src);
    h3.innerHTML = e.target.parentElement.querySelector('h4').textContent;
    span.innerHTML = e.target.parentElement.querySelector('span').textContent;
    button.classList = 'fa-regular fa-trash-can';

        cartItem.appendChild(img)
        div.appendChild(h3)
        div.appendChild(span)
        cartItem.appendChild(div)
        cartItem.appendChild(button)

        cartWrapper.appendChild(cartItem);
    })
})
