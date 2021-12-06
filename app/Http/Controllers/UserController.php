<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function myCompany()
    {
        return view('user.company');
    }
}
