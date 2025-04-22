<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.auth.register');
    }

    /**
     * Used for registering user to the system
     */
    public function store(Request $request)
    {
        dd($request->all());
    }
}
