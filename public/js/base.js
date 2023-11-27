window.addEventListener('scroll', function () {
    let navCart = document.getElementById('navbar-cart');
    window.scrollY > 98 ? navCart.classList.toggle('d-md-none', false) :
        navCart.classList.toggle('d-md-none', true);
})
