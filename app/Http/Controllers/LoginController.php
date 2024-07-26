<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $title = 'Login Page';
        return view('Login.Login', compact('title'));
    }
}