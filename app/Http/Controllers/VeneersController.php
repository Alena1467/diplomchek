<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeneersController extends Controller
{
    public function index()
    {
        return view('veneers');
    }
}
