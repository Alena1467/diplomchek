<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DescbredController extends Controller
{
    public function showReview(Request $request)
    {
        // Если получен POST запрос, обрабатываем отправку нового отзыва
        if ($request->isMethod('post')) {
            // Проверяем, что все поля формы заполнены
            $validated = $request->validate([
                'user_name' => 'required|string|max:255',
                'review' => 'required|string',
                'doctor' => 'required|integer',
            ]);

            // Записываем отзыв в базу данных
            DB::table('reviews')->insert([
                'user_name' => $validated['user_name'],
                'review' => $validated['review'],
                'created_at' => now(),
                'id_doctor' => $validated['doctor'],
            ]);

            // Перенаправляем на ту же страницу для предотвращения повторной отправки формы
            return redirect()->route('descbred');

        } elseif ($request->isMethod('delete')) { // Если получен DELETE запрос, обрабатываем удаление отзыва
            // Проверяем, что получен идентификатор отзыва
            $validated = $request->validate([
                'id_review' => 'required|integer',
            ]);

            // Удаление
            DB::table('reviews')->where('id_review', $validated['id_review'])->delete();

            // Перенаправляем на ту же страницу для предотвращения повторной отправки формы
            return redirect()->route('descbred');
        }

        // Получаем все отзывы из базы данных
        $reviewDate = DB::table('reviews')
            ->select('id_review', 'user_name', 'review', 'created_at')
            ->get();

        // Передаем данные отзывов в представление и отображаем
        return view('descbred', compact('reviewDate'));
    }

    public function submitRecord(Request $request)
    {
        // Проверяем, что все поля формы заполнены
        $validated = $request->validate([
        'fio' => 'required|string|max:255',
        'phone' => 'required|string|regex:/^\+7\(\d{3}\) \d{3}-\d{2}-\d{2}$/',
        'consent' => 'accepted', // Проверка согласия на обработку персональных данных
        'doctor' => 'required|string', // Проверяем, что передано значение айди врача
        ]);

        // Вставка данных в таблицу record
        DB::table('record')->insert([
        'fio' => $validated['fio'],
        'phone' => $validated['phone'],
        'id_doctor' => $validated['doctor'], // Записываем айди врача
        'created_at' => now(),
        ]);

        // Перенаправляем на ту же страницу для предотвращения повторной отправки формы
        return redirect()->route('descbred')->with('success', 'Ваши данные успешно отправлены.');
    }
}
