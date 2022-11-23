let searchForm = document.querySelector('.arama-form');

document.querySelector('#arama-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    shoppingCart.classList.remove('active');
    girisForm.classList.remove('active');
    navbar.classList.remove('active');
}

let shoppingCart = document.querySelector('.sepet');

document.querySelector('#sepet-btn').onclick = () =>{
    shoppingCart.classList.toggle('active');
    searchForm.classList.remove('active');
    girisForm.classList.remove('active');
    navbar.classList.remove('active');
}

let girisForm = document.querySelector('.giris-form');

document.querySelector('#giris-btn').onclick = () =>{
    girisForm.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    girisForm.classList.remove('active');
}

window.onscroll = () =>{
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    girisForm.classList.remove('active');
    navbar.classList.remove('active');
}

var swiper = new Swiper(".urun-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
});

