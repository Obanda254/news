<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $first_name = 'Ariana';
        $last_name = 'Grande';
        return view('about', compact('first_name','last_name'));
    }
}
