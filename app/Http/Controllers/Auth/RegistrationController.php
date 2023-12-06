<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function registrationView()
    {
        if (Auth::check()) {
            return redirect(route('index'));
        }

        return view('auth.registration')->with([
            'categories' => Category::get()
        ]);
    }

    public function register(Request $request)
    {
        if (Auth::check()) {
            return redirect(route('index'));
        }

        $messages = [
            'required' => 'Поле должно быть заполнено',
            'max' => 'Не более 50 символов',
            'email.unique' => 'Пользователь с таким email уже зарегистрирован',
            'password.min' => 'Не менее 8 символов',
            'password.max' => 'Не более 64 символов',
            'password.regex' => 'Пароль должен состоять только из английских букв и цифр'
        ];

        $validateFields = $request->validate([
            'username' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:50', 'unique:users'],
            'password' => ['required', 'string', 'regex:/^[a-zA-Z0-9]+$/', 'min:8', 'max:64']
        ], $messages);

        $user = User::create($validateFields);

        if ($user) {
            Auth::login($user);
            return redirect(route('index'));
        }

        return redirect(route('user.login'))->withErrors([
            'formError' => 'При сохранении пользователя произошла ошибка'
        ]);
    }
}
