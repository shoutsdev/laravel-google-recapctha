<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecaptchaController extends Controller
{
    public function index()
    {
        return view('recaptcha');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'stack' => 'required',
            'g-token' => 'required',
        ],
        [
            'g-token.required' => 'Please verify that you are not a robot.'
        ]);
        dd('Successfully validated');
    }
}
