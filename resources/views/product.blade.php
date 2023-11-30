@extends('layouts._layout')

@section('title', $product->title)

@section('content')
    <main class="main">
        <div class="container-fluid">
            <div class="row pt-3">
                <div class="col-md-5 col-lg-4 mb-3">
                    <div class="bg-white">
                        <div class="product-thumb">
                            <a href="#"><img src="{{ route('product', $product) }}" alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 col-lg-8 mb-3">
                    <div class="bg-white product-content p-3 h-100">
                        <h1 class="section-title h3"><span class="ps-0">{{ $product->title }}</span></h1>

                        <div class="product-price">
                            {{ $product->price }} руб.
                        </div>

                        <p class="product-excerpt">{{ $product->description }}</p>

                        <div class="product-add2cart">
                            <div class="input-group">
                                <label>
                                    <input type="number" class="form-control cart-input" value="1" min="1" max="100">
                                </label>

                                <form action="{{ route('cart-add', $product) }}" method="POST">
                                    <button type="submit" class="btn btn-outline-secondary ms-2"><i class="fas fa-shopping-cart"></i> В корзину</button>
                                    @csrf
                                </form>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
