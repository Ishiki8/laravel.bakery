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
                            <form action="" class="needs-validation" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label for="cartInputAddress" class="form-label required">Адрес доставки</label>
                                    <input type="text" class="form-control" id="cartInputAddress"
                                           placeholder="Адрес доставки" required>
                                    <div class="invalid-feedback">
                                        Введите адрес доставки.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="cartInputPhone" class="form-label required">Номер телефона</label>
                                    <input type="text" class="form-control" id="cartInputPhone"
                                           placeholder="Номер телефона" required>
                                    <div class="invalid-feedback">
                                        Введите номер телефона.
                                    </div>
                                </div>
                                <div class="mb-3 cart-summary">
                                    <h3>Итого: {{ number_format($order->getTotalPrice(), 2) }} руб.</h3>
                                </div>
                                <button type="submit" class="btn btn-primary">Оформить заказ</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
