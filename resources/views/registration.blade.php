@extends('layouts._layout')

@section('content')
    <main class="main">
        <div class="container-fluid">
            <div class="row mt-5 mb-5">
                <div class="col-12">
                    <h2 class="section-title text-center h3">
                        <span>Регистрация</span>
                    </h2>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <form action="" class="needs-validation" novalidate>
                                <div class="mb-3">
                                    <label for="registrationInputFullname" class="form-label required">ФИО</label>
                                    <input type="text" class="form-control" id="registrationInputFullname"
                                           placeholder="ФИО" required>
                                    <div class="invalid-feedback">
                                        Введите ФИО.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="registrationInputEmail" class="form-label required">Почта</label>
                                    <input type="email" class="form-control" id="registrationInputEmail"
                                           placeholder="Email" required>
                                    <div class="invalid-feedback">
                                        Введите корректный Email.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="registrationInputPassword" class="form-label required">Пароль</label>
                                    <input type="password" class="form-control" id="registrationInputPassword"
                                           placeholder="Пароль" required>
                                    <div class="invalid-feedback">
                                        Введите пароль.
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
