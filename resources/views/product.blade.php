@extends('layouts._layout')

@section('content')
    <div class="container-fluid">
        <div class="row pt-3">
            <div class="col-md-5 col-lg-4 mb-3">
                <div class="bg-white">
                    <div class="product-thumb">
                        <a href="#"><img src="{{ asset($product_image) }}" alt=""></a>
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-lg-8 mb-3">
                <div class="bg-white product-content p-3 h-100">
                    <h1 class="section-title h3"><span class="ps-0">{{ $product_title }}</span></h1>

                    <div class="product-price">
                        {{ $product_price }} ₽
                    </div>

                    <p class="product-excerpt">{{ $product_description }}</p>

                    <div class="product-add2cart">
                        <div class="input-group">
                            <label>
                                <input type="number" class="form-control" value="1" min="1" max="100">
                            </label>
                            <button class="btn btn-warning"><i class="fas fa-shopping-cart"></i> В корзину</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
