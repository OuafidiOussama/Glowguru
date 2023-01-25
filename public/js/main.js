window.onload = function (){
    const effect = document.querySelector('.home');

    window.addEventListener('scroll', ()=>{
        if(window.scrollY >= 100){
            effect.style.opacity = '0'
            effect.style.transition = '.2s ease-in-out'
        }
        else {
            effect.style.opacity = '1'
        }
    })
}

var cards = document.querySelectorAll('.product-box')
cards.forEach((card) => {
    card.addEventListener('mouseover', ()=>{
        card.classList.add('is-hover')
    })
    card.addEventListener('mouseleave', ()=>{
        card.classList.remove('is-hover')
    })
});

const search = document.querySelector('#Search')

search.addEventListener('input', ()=>{
    const filter = search.value.toLowerCase();
    const cardProduct = document.querySelectorAll('.product-card')

    cardProduct.forEach((item) => {
        let productName = item.childNodes[1].childNodes[3].childNodes[1].childNodes[1].innerHTML;
        console.log(productName);

        if(productName.toLowerCase().includes(filter.toLowerCase())){
            item.style.display = '';
        }else{
            item.style.display = 'none';
        }
    })

    })