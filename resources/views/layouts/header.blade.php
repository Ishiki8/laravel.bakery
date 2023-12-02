 @php
     $productsInCart = \App\Models\Product::countProductsInCart()
 @endphp

<header class="header">
    <div class="header-top py-1">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6 col-md-4">
                    <a href="{{ route('index') }}" class="header-logo h1">ХЛЕБУШЕК</a>
                </div>

                <div class="col-4">
                    <form action="{{ route('search') }}">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Поиск" aria-label="Поиск" aria-describedby="button-search">
                            <button class="btn btn-outline-secondary" type="submit" id="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>

                <div class="col-6 col-md-4">
                    <div class="header-top-signbtns">
                        @guest
                            <a href="{{ route('user.login') }}">
                                <button type="button" class="btn btn-sm">
                                    Вход
                                </button>
                            </a>
                            <a href="{{ route('user.registration') }}">
                                <button type="button" class="btn btn-sm">
                                    Регистрация
                                </button>
                            </a>
                        @endguest
                        @auth
                            <a href="#" class="m-2">{{ auth()->user()->full_name }}</a>
                            <a href="{{ route('user.logout') }}">
                                <button type="button" class="btn btn-sm">
                                    Выйти
                                </button>
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="header-top"></div> --}}
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


            <div id="navbar-cart">
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
