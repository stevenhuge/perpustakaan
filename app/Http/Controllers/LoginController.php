<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }


    public function store(Request $request) {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return ('gagal');
        } 
        return redirect()->route('buku');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
