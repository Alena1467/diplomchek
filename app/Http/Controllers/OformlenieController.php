<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OformlenieController extends Controller
{
    public function index()
    {
        $centers = DB::table('centers')->get();
        return view('oformlenie', ['centers' => $centers]);
    }

    public function submitRecordpriem(Request $request)
    {
        // Валидация данных на сервере
        $request->validate([
            'fio' => 'required|string|max:255',
            'phone' => 'required|string|regex:/^\+7\(\d{3}\) \d{3}-\d{2}-\d{2}$/',
            'datetime' => 'required|date',
            'problem' => 'required|string|max:450',
            'payment_method' => 'required|string|in:credit-card,QR-code,cash,transfer',
            'address_id' => 'required|exists:centers,id_centers',
        ]);

        // Вставка данных в таблицу record
        DB::table('record')->insert([
            'fio' => $request->input('fio'),
            'phone' => $request->input('phone'),
            'datetime' => $request->input('datetime'),
            'problem' => $request->input('problem'),
            'payment_method' => $request->input('payment_method'),
            'id_center' => $request->input('address_id'),
            'created_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Ваши данные успешно отправлены.');
    }
}
