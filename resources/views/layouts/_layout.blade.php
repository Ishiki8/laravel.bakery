<!doctype html>
<html lang="ru">
<head>
    @include('layouts.styles')
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<div class="wrapper">
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
</div>

@include('layouts.scripts')
@stack('scripts')

<script>
    let order = JSON.parse(localStorage.getItem('cart'));
    order.forEach(item => delete(item['product_title']));
    order.forEach(item => delete(item['product_code']));
    order.forEach(item => delete(item['product_img']));
    order = JSON.stringify(order);

    jQuery.post("/cart/getCart", {'_token': $('meta[name="csrf-token"]').attr('content'), order: order});
</script>
</body>
</html>

