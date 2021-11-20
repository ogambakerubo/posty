<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutContoller extends Controller
{
    public function store()
    {
        // logout
        Auth::logout();
        // redirect
        return redirect()->route('home');
    }
}
