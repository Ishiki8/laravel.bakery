<!doctype html>
<html lang="ru">
<head>
    @include('layouts.styles')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Панель администратора</title>
</head>
<body id="body-pd">
<header class="header" id="header">
    <div class="header_toggle"><i class='bx bx-menu' id="header-toggle"></i></div>
</header>
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="#" class="nav_logo">
                <i class='fa-solid fa-unlock-keyhole nav_logo-icon'></i>
                <span class="nav_logo-name">Панель администратора</span>
            </a>

            <div class="nav_list">
                <a href="#" class="nav_link">
                    <i class='bx bx-user nav_icon'></i>
                    <span class="nav_name">Пользователи</span>
                </a>
                <a href="#" class="nav_link">
                    <i class='bx bx-money-withdraw nav_icon'></i>
                    <span class="nav_name">Заказы</span>
                </a>
                <a href="#" class="nav_link">
                    <i class='bx bx-cart nav_icon'></i>
                    <span class="nav_name">Заказанная продукция</span>
                </a>
                <a href="#" class="nav_link">
                    <i class='bx bx-barcode nav_icon'></i>
                    <span class="nav_name">Товары</span>
                </a>
                <a href="#" class="nav_link">
                    <i class='bx bx-category nav_icon'></i>
                    <span class="nav_name">Категории</span>
                </a>
            </div>
        </div>
        <a href="{{ asset('index.php') }}" class="nav_link">
            <i class='bx bx-log-out nav_icon'></i>
            <span class="nav_name">Выйти</span>
        </a>
    </nav>
</div>
<!--Container Main start-->
<div class="height-100 bg-light">
    <h4>Пользователи</h4>
    <div class="table-responsive">
        <table class="table align-middle table-hover">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>ФИО</th>
                    <th>Почта</th>
                    <th>Пароль</th>
                    <th>Адрес доставки</th>
                    <th>Номер телефона</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a href="#" class="cart-content-title">
                            1
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            Product 1 Lorem ipsum dolor, sit amet consectetur adipisicing.
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            Product 1 Lorem ipsum dolor, sit amet consectetur adipisicing.
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            Product 1 Lorem ipsum dolor, sit amet consectetur adipisicing.
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            Product 1 Lorem ipsum dolor, sit amet consectetur adipisicing.
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            Product 1 Lorem ipsum dolor, sit amet consectetur adipisicing.
                        </a>
                    </td>
                    <td>
                        <button class="btn btn-sm  btn-danger">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!--Container Main end-->
</body>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {

        const showNavbar = (toggleId, navId, bodyId, headerId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

            // Validate that all variables exist
            if (toggle && nav && bodypd && headerpd) {
                toggle.addEventListener('click', () => {
                    // show navbar
                    nav.classList.toggle('show')
                    // change icon
                    toggle.classList.toggle('bx-x')
                    // add padding to body
                    bodypd.classList.toggle('body-pd')
                    // add padding to header
                    headerpd.classList.toggle('body-pd')
                })
            }
        }

        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link')

        function colorLink() {
            if (linkColor) {
                linkColor.forEach(l => l.classList.remove('active'))
                this.classList.add('active')
            }
        }

        linkColor.forEach(l => l.addEventListener('click', colorLink))

        // Your code to run since DOM is loaded and ready
    });
</script>
</html>
