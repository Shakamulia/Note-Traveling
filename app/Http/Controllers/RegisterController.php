<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view("Auth.Register");
    }
    public function store()
    {
        $attributes = request("")->validate([
            "name" => "",
            "nik" => "",
            "email"=> "",
            "password"=> "",
            ]);
$user = User::create($attributes);
    }
}
