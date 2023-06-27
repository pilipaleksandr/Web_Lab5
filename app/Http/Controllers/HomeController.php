<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');

        return view('contact', ['name' => $name, 'email' => $email]);
    }
}