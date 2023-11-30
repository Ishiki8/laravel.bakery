@extends('layouts._layout')

@section('title', 'Корзина')

@section('content')
<main class="main">
    <div class="container-fluid">
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <h2 class="section-title text-center">
                    <span>Товары в корзине</span>
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        @if(\App\Models\Product::countProductsInCart() === 0)
            <span class="fs-3">В корзине пока что пусто...</span>
        @else
        <div class="row">

            <div class="col-lg-8 mb-3">
                <div class="cart-content p-3 h-100 bg-white">

                    <div class="table-responsive">
                        <table class="table align-middle table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>Фото</th>
                                    <th>Товар</th>
                                    <th>Цена</th>
                                    <th>Количество</th>
                                    <th>Общая стоимость</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order->products as $product)
                                    <tr class="text-center">
                                        <td class="product-img-td">
                                            <a href="{{ route('product', $product->code) }}">
                                                <img src="{{ $product->image }}" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('product', $product->code) }}" class="cart-content-title">
                                                {{ $product->title }}
                                            </a>
                                        </td>
                                        <td>
                                            {{ $product->price }} руб.
                                        </td>
                                        <td>
                                            <form action="{{ route('cart-remove', $product) }}" method="POST" class="d-inline">
                                                <button type="submit" class="btn btn-sm btn-danger mb-1">
                                                    <span>-</span>
                                                </button>
                                                @csrf
                                            </form>

                                                <span class="ms-md-2 me-md-2">{{ $product->pivot->quantity }}</span>

                                            <form action="{{ route('cart-add', $product) }}" method="POST" class="d-inline">
                                                <button type="submit" class="btn btn-sm btn-primary mb-1">
                                                    <span>+</span>
                                                </button>
                                                @csrf
                                            </form>
                                        </td>
                                        <td>
                                            {{ number_format($product->getTotalPrice(), 2) }} руб.
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3 ">
                <div class="cart-summary p-3 sidebar sticky-top-2">
                    <div class="d-flex justify-content-between my-3">
                        <h3>Итого</h3>
                        <h3>{{ number_format($order->getTotalPrice(), 2) }} руб.</h3>
                    </div>

                    <div class="d-grid">
                        <a href="#" class="btn btn-primary">Оформить заказ</a>
                    </div></div>
            </div>
        </div>
    </div>
    @endif
</main>
@endsection
