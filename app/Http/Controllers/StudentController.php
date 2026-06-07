<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "inside student controller";
    }

    public function show($id)
    {
        return "id . {{$id}}";
    }

    function passedData()
    {
        $names = [
            "tanmay",
            "amrutha"
        ];

        return view('students', compact('names'));
    }
}
