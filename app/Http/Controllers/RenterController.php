<?php

namespace App\Http\Controllers;

use App\Renter;

/**
 * Класс для работы со страницами арендатора
 * @package App\Http\Controllers
 */
class RenterController extends Controller
{
    /**
     * Авторизация пользователя
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postLogin()
    {
        // Получаем переданные данные методом POST из формы
        $credentials = request()->only('login', 'password');

        // Проверяем правильность введённых данных
        if (\Auth::attempt($credentials)) {
            // Если данные были введены верно, переадресовываем на страницу профиля
            return redirect()->intended('/profile');
        } else {
            // Если данные были введены не верно, переадресовываем на главную страницу
            return redirect('/');
        }
    }

    /**
     * Выход пользователя
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function getLogout()
    {
        // Производим деавторизиацию пользователя
        \Auth::logout();

        // Переадресация на главную страницу сайта
        return redirect('/');
    }

    /**
     * Восстановление пароля
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showRecover() {
        // Получаем контент страницы и выводим
        return view('renter.recover');
    }

    /**
     * Отображение страницы профиля
     *
     * @param string $action (Если now - все товары, которые сейчас в продаже, если sold - все товары, которые проданы)
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showProfile($action = 'now')
    {
        // Определяем номер контракта авторизированного пользователя
        $contract_number = \Auth::user()->number_contract;

        // Получаем данные из модели
        $renter = Renter::find($contract_number);
        // Выводим первый результат об аренде текущего пользователя
        $rent = $renter->rents()->first();
        // Если $action = sold, выводим все товары, которые проданы, если нет, то выводим товары, которые сейчас в продаже
        if ($action == 'sold') {
            $products = $rent->products()->where('amount_of_sold', '>', '0')->get();
        } else {
            $products = $rent->products()->whereRaw('amount_of_sold < amount')->get();
        }

        // Получаем контент, передаём все необходимые данные в виде массива и выводим
        return view('renter.profile', compact('renter', 'rent', 'products', 'action'));
    }

    /**
     * Отображение страницы с информацией о заявках на вывод денежных средств
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showMoneyReceiving()
    {
        // Получаем контент страницы и выводим
        return view('renter.receiving_money');
    }
}