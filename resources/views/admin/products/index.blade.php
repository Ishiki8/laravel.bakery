@extends('admin._panel')

@section('content')
    <h4>Продукция</h4>
    <div class="table-responsive">
        <table class="table align-middle table-hover">
            <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Код</th>
                <th>Название</th>
                <th>Изображение</th>
                <th>Описание</th>
                <th>Вес</th>
                <th>Цена</th>
                <th>Категория</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ $product->id }}
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ $product->code }}
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ $product->title }}
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ $product->image }}
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ $product->description }}
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ $product->weight }}
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ $product->price }}
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ $product->category->title }}
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
