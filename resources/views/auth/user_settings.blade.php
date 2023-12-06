@extends('layouts._layout')

@section('title', 'Настройки аккаунта')

@section('content')
    <main class="main">
        <div class="container-fluid">
            <div class="row mt-5 mb-5">
                <div class="col-12">
                    <h2 class="section-title text-center">
                        <span>Настройки аккаунта</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-8">
                    <div class="mb-3">
                        <span class="fw-bold">ФИО:</span>
                        <span>{{ $user->full_name }}</span>
                        <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-fullname" aria-expanded="@error('full_name') true @else false @enderror"
                                aria-controls="collapse-fullname">
                            Изменить
                        </button>

                        <div class="collapse @error('full_name') show @enderror" id="collapse-fullname">
                            <form action="{{ route('user.userChangeName') }}" method="POST">
                                <label for="changeInputFullname" class="form-label" hidden></label>
                                <input type="text" class="form-control mt-1 @error('full_name') is-invalid @enderror"
                                       id="changeInputFullname" name="full_name" placeholder="Введите новое ФИО" value="{{ old('full_name') }}">

                                @error('full_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                @csrf
                                <button class="btn btn-sm btn-success mt-2" type="submit">Сохранить</button>
                            </form>
                        </div>
                    </div>

                    <div class="mb-3">
                        <span class="fw-bold">Почта:</span>
                        <span>{{ $user->email }}</span>
                        <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-email" aria-expanded="@error('email') true @else false @enderror"
                                aria-controls="collapse-email">
                            Изменить
                        </button>

                        <div class="collapse @error('email') show @enderror" id="collapse-email">
                            <form action="{{ route('user.userChangeEmail') }}" method="POST">
                                <label for="changeInputEmail" class="form-label" hidden></label>
                                <input type="text" class="form-control mt-1 @error('email') is-invalid @enderror"
                                       id="changeInputEmail" name="email" placeholder="Введите новый email" value="{{ old('email') }}">

                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                @csrf
                                <button class="btn btn-sm btn-success mt-2" type="submit">Сохранить</button>
                            </form>
                        </div>
                    </div>

                    <div class="mb-3">
                        <span class="fw-bold">Пароль:</span>
                        <span>********</span>
                        <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-password" aria-expanded="@error('password') true @else false @enderror"
                                aria-controls="collapse-email">
                            Изменить
                        </button>

                        <div class="collapse @error('password') show @enderror" id="collapse-password">
                            <form action="{{ route('user.userChangePassword') }}" method="POST">
                                <label for="changeInputPassword" class="form-label" hidden></label>
                                <input type="text" class="form-control mt-1 @error('password') is-invalid @enderror"
                                       id="changeInputPassword" name="password" placeholder="Введите новый пароль">

                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                @csrf
                                <button class="btn btn-sm btn-success mt-2" type="submit">Сохранить</button>
                            </form>
                        </div>
                    </div>

                    <div class="mb-3">
                        <span class="fw-bold">Адрес доставки:</span>
                        <span>{{ $user->address ?? 'Не указан' }}</span>
                        <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-address" aria-expanded="@error('address') true @else false @enderror"
                                aria-controls="collapse-address">
                            Изменить
                        </button>

                        <div class="collapse @error('address') show @enderror" id="collapse-address">
                            <form action="{{ route('user.userChangeAddress') }}" method="POST">
                                <label for="changeInputAddress" class="form-label" hidden></label>
                                <input type="text" class="form-control mt-1 @error('address') is-invalid @enderror"
                                       id="changeInputAddress" name="address" placeholder="г. Екатеринбург, ул. Крауля, д. 168, к. 2, кв. 111" value="{{ old('address') }}">

                                @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                @csrf
                                <button class="btn btn-sm btn-success mt-2" type="submit">Сохранить</button>
                            </form>
                        </div>
                    </div>

                    <div class="mb-3">
                        <span class="fw-bold">Номер телефона:</span>
                        <span>{{ phoneToFormat($user->phone_number) ?? 'Не указан' }}</span>
                        <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-phone_number" aria-expanded="@error('phone_number') true @else false @enderror"
                                aria-controls="collapse-phone_number">
                            Изменить
                        </button>

                        <div class="collapse @error('phone_number') show @enderror" id="collapse-phone_number">
                            <form action="{{ route('user.userChangePhone') }}" method="POST">
                                <label for="changeInputPhone" class="form-label" hidden></label>
                                <input type="text" class="form-control mt-1 @error('phone_number') is-invalid @enderror"
                                       id="changeInputPhone" name="phone_number" placeholder="Введите номер телефона (+7 | 8)" value="{{ old('phone_number') }}">

                                @error('phone_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                @csrf
                                <button class="btn btn-sm btn-success mt-2" type="submit">Сохранить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
