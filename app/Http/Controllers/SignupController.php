<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function signup()
    {
        $data['title'] = "Sign Up";
        return view("auth.signup.signup", $data);
    }
}
