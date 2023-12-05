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
                </div>
            </div>
        </div>
    </main>
@endsection
