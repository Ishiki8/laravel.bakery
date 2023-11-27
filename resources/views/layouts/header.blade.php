<header class="header">
    <div class="header-top py-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 col-sm-4">
                    <div class="header-top-mail d-flex align-items-center h-100">
                        <i class="fa-regular fa-envelope"></i>
                        <a href="mailto:bakery_hlebushek@gmail.com" class="ms-1">Напишите нам</a>
                    </div>
                </div>
                <div class="col-sm-4 d-none d-sm-block">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="header-top-phone">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                            <a href="tel:+79001234567">+7(900)-123-45-67</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4">
                    <div class="d-flex justify-content-end">
                        <div class="header-top-signbtns">
                            <button type="button" class="btn btn-sm">Вход</button>
                            <button type="button" class="btn btn-sm">Регистрация</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="header-top"></div> --}}

    <div class="header-middle py-1">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6 col-md-4">
                    <a href="{{ asset('index.php') }}" class="header-logo h1">ХЛЕБУШЕК</a>
                </div>

                <div class="col-md-4 order-md-2 text-end d-none d-md-block">
                    <button class="btn position-relative" type="button">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="position-absolute top-0 start-50 badge rounded-pill bg-danger">3</span>
                    </button>
                </div>

                <div class="col-md-4 col-sm-6 order-md-1 mt-2 mt-sm-0">
                    <form action="{{ asset('search') }}">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Поиск" aria-label="Поиск" aria-describedby="button-search">
                            <button class="btn btn-outline-secondary" type="submit" id="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    {{-- <div class="header-middle"></div> --}}
</header>

<div class="header-bottom sticky-top">
    <nav class="navbar navbar-expand-sm bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="offcanvasLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasProductsLabel">Наша продукция</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a {!!(isset($_GET['id']) && $_GET['id'] === 'bread') ? 'class="nav-link active" aria-current="page"' : 'class="nav-link"'!!} href="{{ asset('category?id=bread') }}">Хлеб</a>
                        </li>
                        <li class="nav-item">
                            <a {!!(isset($_GET['id']) && $_GET['id'] === 'buns') ? 'class="nav-link active" aria-current="page"' : 'class="nav-link"'!!} href="{{ asset('category?id=buns') }}">Булочки</a>
                        </li>
                        <li class="nav-item">
                            <a {!!(isset($_GET['id']) && $_GET['id'] === 'cakes') ? 'class="nav-link active" aria-current="page"' : 'class="nav-link"'!!} href="{{ asset('category?id=cakes') }}">Торты</a>
                        </li>
                        <li class="nav-item">
                            <a {!!(isset($_GET['id']) && $_GET['id'] === 'cookies') ? 'class="nav-link active" aria-current="page"' : 'class="nav-link"'!!} href="{{ asset('category?id=cookies') }}">Печенье</a>
                        </li>
                        <li class="nav-item">
                            <a {!!(isset($_GET['id']) && $_GET['id'] === 'pies') ? 'class="nav-link active" aria-current="page"' : 'class="nav-link"'!!} href="{{ asset('category?id=pies') }}">Пирожки</a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="d-block d-md-none" id="navbar-cart">
                <button class="btn position-relative" type="button">
                    <i class="fa-solid fa-cart-shopping cart-shopping-navbar"></i>
                    <span class="position-absolute top-0 start-50 badge rounded-pill bg-danger">3</span>
                </button>
            </div>
        </div>
    </nav>
</div>
{{-- <div class="header-bottom"></div> --}}
