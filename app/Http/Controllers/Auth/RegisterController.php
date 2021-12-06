<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * @param RegisterRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(RegisterRequest $request): RedirectResponse
    {
        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($user->save()) {
            Alert::success('Başarılı!', 'Kayıt oldunuz giriş yapabilirsiniz.');
            return back();
        } else {
            Alert::error('Hata!', 'Kayıt olurken bir problemle karşılaştık.');
            return back();
        }
    }
}
