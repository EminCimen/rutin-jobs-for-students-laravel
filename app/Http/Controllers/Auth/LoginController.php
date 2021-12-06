<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Auth;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    /**
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function login(LoginRequest $request): RedirectResponse
    {
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];

        if(Auth::attempt($credentials, $request->rememberMe)){
            Alert::success('Başarılı!', 'Giriş yaptınız');
        } else {
            Alert::error('Hata!', 'Kullanıcı adı veya şifreniz yanlış!');
        }

        return back();
    }

    /**
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        Auth::logout();
        Alert::success('Başarılı!', 'Çıkış yaptınız');
        return redirect()->route('home');
    }
}
