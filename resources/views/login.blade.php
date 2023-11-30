@extends('layouts._layout')

@section('title', 'Вход')

@section('content')
    <main class="main">
        <div class="container-fluid">
            <div class="row mt-5 mb-5">
                <div class="col-12">
                    <h2 class="section-title text-center h3">
                        <span>Вход</span>
                    </h2>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <form action="" class="needs-validation" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label for="loginInputEmail" class="form-label required">Почта</label>
                                    <input type="email" class="form-control" id="loginInputEmail"
                                           placeholder="Email" required>
                                    <div class="invalid-feedback">
                                        Введите Email.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="loginInputPassword" class="form-label required">Пароль</label>
                                    <input type="password" class="form-control" id="loginInputPassword"
                                           placeholder="Пароль" required>
                                    <div class="invalid-feedback">
                                        Введите пароль.
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Войти</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
