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
                        {{ $category->id }}
                    </td>
                    <td>
                        {{ $category->code }}
                    </td>
                    <td>
                        {{ $category->title }}
                    </td>
                    <td class="text-center">
                        <a href="{{ route('categories.edit', $category) }}" role="button" class="btn btn-sm btn-outline-secondary">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <a href="{{ route('categories.create') }}" role="button" class="btn btn-sm btn-primary mb-1">
            <i class="fa-solid fa-plus"></i> Добавить
        </a>
    </div>
@endsection
