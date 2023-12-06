<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function userSettingsView() {
        $user = auth()->user();

        return view('auth.user_settings')->with([
            'user' => $user,
            'categories' => Category::get()
        ]);
    }

    public function changeName(Request $request) {
        $user = auth()->user();

        $messages = [
            'required' => 'Поле должно быть заполнено',
            'max' => 'Не более 50 символов'
        ];

        $validateFields = $request->validate([
            'full_name' => ['required', 'string', 'max:50']
        ], $messages);

        $user->saveName($validateFields['full_name']);

        return redirect(route('user.userSettings'));
    }

    public function changeEmail(Request $request) {
        $user = auth()->user();

        $messages = [
            'required' => 'Поле должно быть заполнено',
            'max' => 'Не более 50 символов',
            'email' => 'Некорректный формат email',
            'email.unique' => 'Пользователь с таким email уже зарегистрирован',
        ];

        $validateFields = $request->validate([
            'email' => ['required', 'email', 'max:50', 'unique:users']
        ], $messages);

        $user->saveEmail($validateFields['email']);

        return redirect(route('user.userSettings'));
    }

    public function changePassword(Request $request) {
        $user = auth()->user();

        $messages = [
            'required' => 'Поле должно быть заполнено',
            'password.min' => 'Не менее 8 символов',
            'password.max' => 'Не более 64 символов',
            'password.regex' => 'Пароль должен состоять только из английских букв и цифр'
        ];

        $validateFields = $request->validate([
            'password' => ['required', 'string', 'regex:/^[a-zA-Z0-9]+$/', 'min:8', 'max:64']
        ], $messages);

        $user->savePassword($validateFields['password']);

        return redirect(route('user.userSettings'));
    }

    public function changeAddress(Request $request) {
        $user = auth()->user();

        $messages = [
            'max' => 'Не более 200 символов',
            'regex' => 'Некорректный формат адреса'
        ];

        $validateFields = $request->validate([
            'address' => ['nullable', 'string', 'regex:/^г\.\s+Екатеринбург,\s+ул\.\s+[a-zA-Zа-яА-ЯёЁ\s]+,\s+д\.\s+\d+(,\s+к\.\s+\d+)?(,\s+кв\.\s+\d+)?$/u', 'max:200']
        ], $messages);

        $user->saveAddress($validateFields['address']);

        return redirect(route('user.userSettings'));
    }

    public function changePhone(Request $request) {
        $user = auth()->user();

        $messages = [
            'regex' => 'Некорректный формат номера телефона'
        ];

        $validateFields = $request->validate([
            'phone_number' => ['nullable', 'string', 'regex:/^(\+7|8)\d{3}\d{3}\d{2}\d{2}$/i']
        ], $messages);

        $user->savePhone($validateFields['phone_number']);

        return redirect(route('user.userSettings'));
    }
}
