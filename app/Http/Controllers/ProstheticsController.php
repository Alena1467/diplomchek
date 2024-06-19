<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProstheticsController extends Controller
{
    public function index()
    {
        return view('prosthetics');
    }
}
