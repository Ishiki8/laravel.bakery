@php
    $statuses = [
        1 => 'В работе',
        2 => 'Доставка',
        3 => 'Получен',
        4 => 'Отменен'
    ]
@endphp

@extends('layouts._layout')

@section('title', 'Мои заказы')

@section('content')
    <main class="main">
        <div class="container-fluid">
            <div class="row mt-5 mb-5">
                <div class="col-12">
                    <h2 class="section-title text-center">
                        <span>Мои заказы</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @if(!($orders->all()))
                <span class="fs-3">Вы пока не совершали заказов...</span>
            @else
            <div class="row">
                <div class="col-lg-8 mb-3">
                    <div class="cart-content p-3 h-100 bg-white">
                        @foreach($orders as $order)
                        <span>Заказ от {{\Carbon\Carbon::parse($order->date)->format('d.m.Y')}}</span>
                        <br>
                        <span>Статус: {{ $statuses[$order->status] }}</span>
                        <br>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$order->id}}" aria-expanded="false" aria-controls="collapse-{{$order->id}}">
                            Состав заказа
                        </button>
                        <br>
                        <div class="table-responsive collapse" id="collapse-{{$order->id}}">
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
                                                <span class="ms-md-2 me-md-2">{{ $product->pivot->quantity }}</span>
                                            </td>
                                            <td>
                                                {{ number_format($product->getTotalPrice(), 2) }} руб.
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
        </div>
    </main>
@endsection
