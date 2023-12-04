@php
    $statuses = [
        1 => 'В работе',
        2 => 'Доставка',
        3 => 'Получен',
        4 => 'Отменен'
    ]
@endphp

@extends('admin._panel')

@section('content')
    <h4>Заказы</h4>
    <div class="table-responsive">
        <table class="table align-middle table-hover">
            <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Дата</th>
                <th>Статус</th>
                <th>Номер телефона</th>
                <th>Адрес доставки</th>
                <th>Заказчик</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ $order->id }}
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ \Carbon\Carbon::parse($order->date)->format('H:i d.m.Y') }}
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ $statuses[$order->status] }}
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ $order->client_phone }}
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ $order->client_address }}
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ $order->user->full_name }}
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
