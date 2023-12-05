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
}
