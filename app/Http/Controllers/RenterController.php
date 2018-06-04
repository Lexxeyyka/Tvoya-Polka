<?php

namespace App\Http\Controllers;

use App\Renter;

class RenterController extends Controller
{
    /**
     * Авторизация пользователя
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postLogin()
    {
        $credentials = request()->only('login', 'password');

        if (\Auth::attempt($credentials)) {
            return redirect()->intended('/profile');
        } else {
            return redirect('/');
        }
    }

    /**
     * Выход пользователя
     */
    public function getLogout()
    {
        \Auth::logout();

        return redirect('/');
    }

    /**
     *
     *
     * @param string $action
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showProfile($action = 'now')
    {
        $contract_number = \Auth::user()->number_contract;

        $renter = Renter::find($contract_number);
        $rent = $renter->rents()->first();
        if ($action == 'sold') {
            $products = $rent->products()->where('amount_of_sold', '>', '0')->get();
        } else {
            $products = $rent->products()->whereRaw('amount_of_sold < amount')->get();
        }


        return view('renter.profile', compact('renter', 'rent', 'products'));
    }
}