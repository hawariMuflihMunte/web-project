<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        dd($request->all());
    }
}
