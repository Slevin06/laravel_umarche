<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialLoginController extends Controller
{
    public function index()
    {
        return view('user.auth.social-login');
    }
}
