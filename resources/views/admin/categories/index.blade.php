@extends('admin._panel')

@section('content')
    <h4>Категории продукции</h4>
    <div class="table-responsive">
        <table class="table align-middle table-hover">
            <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Код</th>
                <th>Название</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ $category->id }}
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ $category->code }}
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ $category->title }}
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
