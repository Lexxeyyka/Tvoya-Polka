<?php
namespace App\Http\Controllers;

use App\Renter;

class RenterController extends Controller {
    public function showProfile($action = 'now')
    {
        $contract_number = '14';

        $renter = Renter::find($contract_number);
        $rent = $renter->rents()->first();
        if($action == 'sold') {
            $products = $rent->products()->where('sold_amount', '>', '0')->get();
        } else {
            $products = $rent->products()->whereRaw('sold_amount < total_amount')->get();
        }

        return view('renter.profile', compact('renter', 'rent', 'products'));
    }
}