<div class="col-lg-3 col-md-4 col-sm-6 mb-3">
    <div class="product-card">
        <div class="product-thumb">
            <a href="{{ asset('product') }}"><img src="{{ asset($product_image) }}" alt=""></a>
        </div>
        <div class="product-details">
            <h4>
                <a href="{{ asset('product') }}">{{ $product_title }}</a>
            </h4>
            <p class="product-excerpt">{{ $product_description }}</p>
            <div class="product-bottom-details d-flex justify-content-between">
                <div class="product-price">
                    {{ $product_price }} ₽
                </div>
                <div class="product-links">
                    <a href="#" class="btn btn-outline-secondary add-to-cart"><i
                            class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
