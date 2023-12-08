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
                <th class="text-center">Действия</th>
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
                    <td class="text-center">
                        <a href="#" role="button" class="btn btn-sm btn-outline-secondary">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <a href="#" role="button" class="btn btn-sm btn-primary">
            <i class="fa-solid fa-plus"></i> Добавить
        </a>
    </div>
@endsection
