<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function signin()
    {
        $data['title'] = "Sign in";
        return view("auth\signin\signin", $data);
    }
}
