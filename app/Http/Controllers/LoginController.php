<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    /**
     * Used for authenticating logged in user
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('home')->with('success', 'Berhasil Masuk!');
        }

        return redirect()->back()->withErrors([
            'email' => 'Terjadi kesalahan.',
            'password' => 'Terjadi kesalahan.',
        ]);
    }
}
