@extends('layouts._layout')

@section('title', 'Подтверждение заказа')

@section('content')
    <main class="main">
        <div class="container-fluid">
            <div class="row mt-5 mb-5">
                <div class="col-12">
                    <h2 class="section-title text-center h3">
                        <span>Подтверждение заказа</span>
                    </h2>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <form action="{{ route('cart-confirm-add') }}" method="POST" class="needs-validation" novalidate>
                                <div class="mb-3">
                                    <label for="cartInputAddress" class="form-label required">Адрес доставки</label>
                                    <input type="text" class="form-control mt-1 @error('address') is-invalid @enderror"
                                           id="cartInputAddress" name="address" placeholder="г. Екатеринбург, ул. Крауля, д. 168, к. 2, кв. 111" value="{{ $address ?? old('address') }}">

                                    @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="cartInputPhone" class="form-label required">Номер телефона</label>
                                    <input type="text" class="form-control mt-1 @error('phone') is-invalid @enderror"
                                           id="cartInputPhone" name="phone" placeholder="Введите номер телефона (+7 | 8)" value="@if($phone)+@endif{{ $phone ?? old('phone') }}">

                                    @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 cart-summary">
                                    <h3>Итого: {{ number_format($order->getTotalPrice(), 2) }} руб.</h3>
                                </div>
                                @csrf
                                <button type="submit" class="btn btn-primary">Оформить заказ</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
