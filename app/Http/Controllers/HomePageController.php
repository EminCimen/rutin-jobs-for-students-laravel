<?php

namespace App\Http\Controllers;

class HomePageController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
