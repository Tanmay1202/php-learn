<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function login(Request $request)
    {
        $name = $request->input('name');
        $request->session()->put('my-name', $name);
        $request->session()->put('all-data', $request->input());
        return redirect('profile');
    }

    public function logout()
    {
        session()->pull('my-name');
        return redirect('profile');
    }
}
