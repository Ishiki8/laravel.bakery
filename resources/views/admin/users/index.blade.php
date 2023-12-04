@extends('admin._panel')

@section('content')
    <h4>Пользователи</h4>
    <div class="table-responsive">
        <table class="table align-middle table-hover">
            <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>ФИО</th>
                <th>Почта</th>
                <th>Пароль</th>
                <th>Адрес доставки</th>
                <th>Номер телефона</th>
                <th>Роль</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ $user->id }}
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ $user->full_name }}
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ $user->email }}
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            ********
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ $user->address ?? 'Не указан' }}
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ $user->phone_number ?? 'Не указан' }}
                        </a>
                    </td>
                    <td>
                        <a href="#" class="cart-content-title">
                            {{ $user->role->title }}
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
