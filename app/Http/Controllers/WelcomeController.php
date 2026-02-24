<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return 'Hello World';
    }

    public function greeting()
    {
        return view('hello')
            ->with('name', 'Angel')
            ->with('occupation', 'Astronaut');
    }
}
