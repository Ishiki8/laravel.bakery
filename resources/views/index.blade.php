<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/css/base.css">
    <link rel="shortcut icon" href="/img/bakery_icon.ico" type="image/x-icon">
    <title>Хлебушек</title>
</head>
<body>

    <div class="wrapper">
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
            <!--div class="header-top" -->

            <div class="header-middle py-1">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-md-4">
                            <a href="index.php" class="header-logo h1">ХЛЕБУШЕК</a>
                        </div>

                        <div class="col-md-4 order-md-2 text-end d-none d-md-block">
                            <button class="btn position-relative" type="button">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span class="position-absolute top-0 start-50 badge rounded-pill bg-danger">3</span>
                            </button>
                        </div>

                        <div class="col-md-4 col-sm-6 order-md-1 mt-2 mt-sm-0">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Поиск" aria-label="Поиск" aria-describedby="button-search">
                                    <button class="btn btn-outline-secondary" type="submit" id="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!--div class="header-middle" -->
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
                                    <a class="nav-link" href="#">Хлеб</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Булочки</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Торты</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Печенье</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Пирожки</a>
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
        <!--div class="header-bottom" -->

        <main class="main">
            <div id="carousel" class="carousel slide d-none d-md-block"><!--carousel-fade -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/homepage_carousel/buns-1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h5>Печем от всей души!</h5>
                            <p>Именно поэтому наша продукция так вкусна.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/homepage_carousel/buns-2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h5>Используем креативность наших сотрудников!</h5>
                            <p>Именно поэтому наша продукция так красива.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/homepage_carousel/buns-3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h5>Заказываем только проверенное сырье!</h5>
                            <p>Именно поэтому наша продукция богата полезными веществами.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/homepage_carousel/buns-4.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h5>Уделяем особое внимание праздникам!</h5>
                            <p>Именно поэтому наша продукция дарит хорошее настроение.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/homepage_carousel/buns-5.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h5>Ищем рецепты со всего мира!</h5>
                            <p>Именно поэтому наша продукция удивляет.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <section class="featured-products px-md-3">
                <div class="container-fluid">
                    <div class="row mb-5">
                        <div class="col-12">
                            <h2 class="section-title text-center">
                                <span>Последние товары</span>
                            </h2>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                            <div class="product-card">
                                <div class="product-thumb">
                                    <a href="product.html"><img src="img/products/tort1.jpg" alt=""></a>
                                </div>
                                <div class="product-details">
                                    <h4>
                                        <a href="products.html">Product 1 Lorem ipsum dolor, sit amet consectetur
                                            adipisicing.</a>
                                    </h4>
                                    <p class="product-excerpt">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Placeat, aperiam!</p>
                                    <div class="product-bottom-details d-flex justify-content-between">
                                        <div class="product-price">
                                            65 ₽
                                        </div>
                                        <div class="product-links">
                                            <a href="#" class="btn btn-outline-secondary add-to-cart"><i
                                                    class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                            <div class="product-card">
                                <div class="product-thumb">
                                    <a href="product.html"><img src="img/products/baton1.jpg" alt=""></a>
                                </div>
                                <div class="product-details">
                                    <h4>
                                        <a href="products.html">Product 2</a>
                                    </h4>
                                    <p class="product-excerpt">Lorem ipsum dolor</p>
                                    <div class="product-bottom-details d-flex justify-content-between">
                                        <div class="product-price">
                                            65 ₽
                                        </div>
                                        <div class="product-links">
                                            <a href="#" class="btn btn-outline-secondary add-to-cart"><i
                                                    class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                            <div class="product-card">
                                <div class="product-thumb">
                                    <a href="product.html"><img src="img/products/hachapuri.jpg" alt=""></a>
                                </div>
                                <div class="product-details">
                                    <h4>
                                        <a href="products.html">Product 3 Lorem ipsum</a>
                                    </h4>
                                    <p class="product-excerpt">Lorem ipsum</p>
                                    <div class="product-bottom-details d-flex justify-content-between">
                                        <div class="product-price">
                                            100 ₽
                                        </div>
                                        <div class="product-links">
                                            <a href="#" class="btn btn-outline-secondary add-to-cart"><i
                                                    class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                            <div class="product-card">
                                <div class="product-thumb">
                                    <a href="product.html"><img src="img/products/pirozhnoe2.jpg" alt=""></a>
                                </div>
                                <div class="product-details">
                                    <h4>
                                        <a href="products.html">Product 4</a>
                                    </h4>
                                    <p class="product-excerpt">Lorem ipsum dolor</p>
                                    <div class="product-bottom-details d-flex justify-content-between">
                                        <div class="product-price">
                                            65 ₽
                                        </div>
                                        <div class="product-links">
                                            <a href="#" class="btn btn-outline-secondary add-to-cart"><i
                                                    class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                            <div class="product-card">
                                <div class="product-thumb">
                                    <a href="product.html"><img src="img/products/cheburek.jpg" alt=""></a>
                                </div>
                                <div class="product-details">
                                    <h4>
                                        <a href="products.html">Product 5 Lorem ipsum dolor, sit amet consectetur
                                            adipisicing.</a>
                                    </h4>
                                    <p class="product-excerpt">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Placeat, aperiam!</p>
                                    <div class="product-bottom-details d-flex justify-content-between">
                                        <div class="product-price">
                                            65 ₽
                                        </div>
                                        <div class="product-links">
                                            <a href="#" class="btn btn-outline-secondary add-to-cart"><i
                                                    class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                            <div class="product-card">
                                <div class="product-thumb">
                                    <a href="product.html"><img src="img/products/tort4.jpg" alt=""></a>
                                </div>
                                <div class="product-details">
                                    <h4>
                                        <a href="products.html">Product 6</a>
                                    </h4>
                                    <p class="product-excerpt"></p>
                                    <div class="product-bottom-details d-flex justify-content-between">
                                        <div class="product-price">
                                            65 ₽
                                        </div>
                                        <div class="product-links">
                                            <a href="#" class="btn btn-outline-secondary add-to-cart"><i
                                                    class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                            <div class="product-card">
                                <div class="product-thumb">
                                    <a href="product.html"><img src="img/products/pechenye2.jpg" alt=""></a>
                                </div>
                                <div class="product-details">
                                    <h4>
                                        <a href="products.html">Product 7</a>
                                    </h4>
                                    <p class="product-excerpt">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Placeat, aperiam!</p>
                                    <div class="product-bottom-details d-flex justify-content-between">
                                        <div class="product-price">
                                            65 ₽
                                        </div>
                                        <div class="product-links">
                                            <a href="#" class="btn btn-outline-secondary add-to-cart"><i
                                                    class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                            <div class="product-card">
                                <div class="product-thumb">
                                    <a href="product.html"><img src="img/products/tort3.jpg" alt=""></a>
                                </div>
                                <div class="product-details">
                                    <h4>
                                        <a href="products.html">Product 8 Lorem</a>
                                    </h4>
                                    <p class="product-excerpt">Lorem ipsum dolor</p>
                                    <div class="product-bottom-details d-flex justify-content-between">
                                        <div class="product-price">
                                            65 ₽
                                        </div>
                                        <div class="product-links">
                                            <a href="#" class="btn btn-outline-secondary add-to-cart"><i
                                                    class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="about-us" id="about">
                <div class="container fluid">
                    <div class="row mb-5">
                        <div class="col-12">
                            <h2 class="section-title text-center">
                                <span>История нашей пекарни</span>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>Наша пекарня была основана в далеком 2004 году молодым предпринимателем Пупкиным Василием
                                Васильевичем.</p>
                            <p>Василий вырос в деревне, окруженной полями и лугами. Он с самого детства полюбил аромат
                                ржи, шелест ее колосков... Поэтому, достигнув зрелого возраста парень даже не сомневался:
                                выпечка - его судьба!</p>
                            <p>И вот, накопив необходимую сумму, Василий наконец открыл нашу пекарню. Он вкладывал все силы,
                                всю свою душу в развитие этого предприятия, искал наиболее амбициозных и преданных своему делу
                                сотрудников.</p>
                            <p>
                                <strong>Так и появилась наша любимая пекарня "Хлебушек"!
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="advantages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section-title text-center">
                                <span>Наши преимущества</span>
                            </h2>
                        </div>
                    </div>
                    <div class="row gy-3 items">
                        <div class="col-lg-3 col-sm-6">
                            <div class="item">
                                <p>
                                    <i class="fas fa-face-smile"></i>
                                </p>
                                <p>Высокое качество продукции</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="item">
                                <p>
                                    <i class="fas fa-layer-group"></i>
                                </p>
                                <p>Широкий ассортимент товаров</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="item">
                                <p>
                                    <i class="fa-solid fa-money-bill-1-wave"></i>
                                </p>
                                <p>Приятные цены</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="item">
                                <p>
                                    <i class="fa-solid fa-people-group"></i>
                                </p>
                                <p>Профессионалы своего дела</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="find-us pb-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section-title text-center">
                                <span>Как нас найти</span>
                            </h2>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2182.7587610257515!2d60.52178597656027!3d56.83292790828415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c16fa4cafcf3bb%3A0x5f3e35aa95939958!2sUral&#39;skiy%20Gosudarstvennyy%20Radiotekhnicheskiy%20Kolledzh.!5e0!3m2!1sen!2sru!4v1701065387606!5m2!1sen!2sru"
                            width="100%" height="450" style="border:0; display: block" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
        </main>

        <footer class="footer">
            <div class="text-center p-3">
                © 2023 Copyright:
                <a class="text-body" href="index.php">laravel.bakery</a>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/base.js"></script>
</body>
</html>
