@extends('layouts._layout')

@section('content')
<main class="main">
    <div class="container-fluid">
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <h2 class="section-title text-center">
                    <span>{{ $category_title }}</span>
                </h2>
            </div>
        </div>

        <div class="row ">
            @for($i = 0; $i < 8; $i++)
                @include('product_card', [
                    'product_image' => asset('img/products/baton1.jpg'),
                    'product_title' => 'Батонище',
                    'product_description' => 'Вкуснятина-то какая!',
                    'product_price' => 200
                ])
            @endfor
        </div>

        @include('layouts.pagination')
    </div>
</main>
@endsection
