<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return 'registration';
    }

    public function store(Request $request)
    {
        return 'input reg data';
    }
}
