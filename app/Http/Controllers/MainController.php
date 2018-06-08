<?php

namespace App\Http\Controllers;

use App\Renter;

/**
 * Класс для работы с основными страницами сайта
 * @package App\Http\Controllers
 */
class MainController extends Controller
{
    /**
     * Отображение главной страницы
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showHome()
    {
        // Получаем контент страницы и выводим
        return view('index');
    }

    /**
     * Отображение страницы о нас
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showAbout()
    {
        // Получаем контент страницы и выводим
        return view('about');
    }
}