<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnesthesiaController extends Controller
{
    public function index()
    {
        return view('anesthesia');
    }
}
