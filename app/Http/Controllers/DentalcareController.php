<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DentalcareController extends Controller
{
    public function index()
    {
        return view('dentalcare');
    }
}
