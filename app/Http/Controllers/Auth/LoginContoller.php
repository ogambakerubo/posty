<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginContoller extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // validation
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // sign in user
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password,], $request->remember)) {
            return back()->with('status', 'Invalid login details');
        }
        // redirect
        return redirect()->route('dashboard');
    }
}
