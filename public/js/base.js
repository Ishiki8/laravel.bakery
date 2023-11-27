window.addEventListener('scroll', function () {
    let navCart = document.getElementById('navbar-cart');
    window.scrollY > 98 ? navCart.classList.toggle('d-md-none', false) :
        navCart.classList.toggle('d-md-none', true);
});

(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()
