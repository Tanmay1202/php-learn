<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;

        return view('form-vals', compact('name', 'email'));
    }
}
