<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function index(): View
    {
        return view('welcome');
    }

    public function login(): View
    {
        return view('auth.login');
    }

    public function register(): View
    {
        return view('auth.register');
    }

    public function showProfile(string $username): View
    {
        return view('profile', [
            'username' => $username
        ]);
    }

    public function showTeachers(Request $request): View
    {
        // Шукаємо в URL параметр '?specialization'
        $specializationFilter = $request->input('specialization');

        // Тимчасовий список викладачів (поки немає бази даних)
        $allTeachers = [
            [
                'name' => 'Професор Капібара',
                'specialization' => 'Програмування',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Hydrochoeris_hydrochaeris_in_Brazil_in_Petr%C3%B3polis%2C_Rio_de_Janeiro%2C_Brazil_09.jpg/1200px-Hydrochoeris_hydrochaeris_in_Brazil_in_Petr%C3%B3polis%2C_Rio_de_Janeiro%2C_Brazil_09.jpg'
            ],
            [
                'name' => 'Професор Бобер',
                'specialization' => 'Програмування',
                'photo' => 'https://telegraf.com.ua/static/storage/thumbs/428x240/a/bc/b96cef06-922e711b755f21a094d3e598642b0bca.jpeg?v=6604_1'
            ],
            [
                'name' => 'Викладач Джобс',
                'specialization' => 'Бізнес',
                'photo' => 'https://adebiportal.kz/storage/tmp/resize/authors/1200_0_50a67d52f5941e1494fdb768a2777c13.jpeg'
            ],
            [
                'name' => 'Пані Шанель',
                'specialization' => 'Бізнес',
                'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0o1M6UUT8LRHPn5PzG9nzTBiyOwJw3DUVuA&s'
            ]
        ];

        if ($specializationFilter) {
            $filteredTeachers = array_filter($allTeachers, function ($teacher) use ($specializationFilter) {
                return $teacher['specialization'] == $specializationFilter;
            });
        } else {
            $filteredTeachers = $allTeachers;
        }

        return view('teachers', [
            'teachers' => $filteredTeachers,
            'currentFilter' => $specializationFilter
        ]);
    }
}
