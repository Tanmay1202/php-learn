<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentFormController extends Controller
{
    public function submitForm(Request $request)
    {
        $request->validate([
            "name" => "required|min:3",
            "email" => "required|min:4",
            "age" => "required|numeric|min:18",
            "image" => "required|mimes:jpg,png|max:2048"
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $age = $request->input('age');

        if($request->hasFile('image'))
            {
                $file = $request->file('image');
                $fileName = "randomFile";
                $filePath = $file->storeAs('uploads', $fileName, 'public');
            }

        $data = [
            'name' => $name,
            'email' => $email,
            'age' => $age,
            'file' => $filePath
        ];

        return view('result', compact('data'));

    }
}
