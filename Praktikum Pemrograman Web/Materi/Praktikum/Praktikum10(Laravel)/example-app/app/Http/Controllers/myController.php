<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentControllermyController extends Controller
{
    public function index()
    {
        return view('beranda');
    }
}
