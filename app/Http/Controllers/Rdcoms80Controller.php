<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Rdcoms80Controller extends Controller
{
    public function index()
    {
        $doctors = DB::table('doctors_centers')
            ->join('doctors', 'doctors_centers.id_doctor', '=', 'doctors.id_doctor')
            ->join('centers', 'doctors_centers.id_centers', '=', 'centers.id_centers')
            ->join('timetable', 'doctors_centers.id_dc', '=', 'timetable.id_dc')
            ->select(
                'doctors.last_name',
                'doctors.first_name',
                'doctors.third_name',
                'timetable.date',
                'timetable.time'
            )
            ->where('centers.address', 'г. Челябинск, Комсомольский проспект, 80')
            ->orderBy('timetable.date')
            ->orderBy('timetable.time')
            ->get();

        return view('rdcoms80', compact('doctors'));
    }
}
