<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CountryController extends Controller
{
    public function __construct()
    {
        $this->middleware('country.check');
    }

    public function country($count)
    {
        if($count == 1)
            return "India Zindabad";
        else
            return "Hindustan Zindabad";
    }

}
