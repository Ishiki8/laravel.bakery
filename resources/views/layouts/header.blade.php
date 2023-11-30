 @php
     $productsInCart = \App\Models\Product::countProductsInCart()
 @endphp

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
                            <a href="{{ route('login') }}"><button type="button" class="btn btn-sm">Вход</button></a>
                            <a href="{{ route('registration') }}"><button type="button" class="btn btn-sm">Регистрация</button></a>
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
                    <a href="{{ route('index') }}" class="header-logo h1">ХЛЕБУШЕК</a>
                </div>

                <div class="col-md-4 order-md-2 text-end d-none d-md-block">
                    <a href="{{ route('cart') }}">
                        <button class="btn position-relative" type="button">
                            <i class="fa-solid fa-cart-shopping"></i>
                            @if($productsInCart)
                                <span class="position-absolute top-0 start-50 badge rounded-pill bg-danger">{{ $productsInCart }}</span>
                            @endif
                        </button>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 order-md-1 mt-2 mt-sm-0">
                    <form action="{{ route('search') }}">
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
                        @foreach($categories as $category)
                            <li class="nav-item">
                                <a {!!(isset($active_category) && $active_category === $category->code) ?
                                        'class="nav-link active" aria-current="page"' :
                                        'class="nav-link"'!!}
                                        href="{{ route('category', $category->code) }}">
                                    {{ $category->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>


            <div class="d-block d-md-none" id="navbar-cart">
                <a href="{{ asset('cart') }}">
                    <button class="btn position-relative" type="button">
                        <i class="fa-solid fa-cart-shopping cart-shopping-navbar"></i>
                        @if($productsInCart)
                            <span class="position-absolute top-0 start-50 badge rounded-pill bg-danger">{{ $productsInCart }}</span>
                        @endif
                    </button>
                </a>
            </div>
        </div>
    </nav>
</div>
{{-- <div class="header-bottom"></div> --}}
