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

    public function destroy(Request $request)
    {
        // Attempt to log the user out
        if (Auth::check()) {
            Auth::logout();

            // Invalidate the current session
            $request->session()->invalidate();

            // Regenerate the session after logout to prevent CSRF token mismatch
            $request->session()->regenerate();
        }

        return redirect('/');
    }
}
