<!doctype html>
<html lang="ru">
<head>
    @include('layouts.styles')
    <title>{{ $title }}</title>
</head>
<body>

<div class="wrapper">
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
</div>

@include('layouts.scripts')
</body>
</html>

