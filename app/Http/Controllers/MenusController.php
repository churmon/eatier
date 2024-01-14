<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenusController extends Controller
{
    public function breakfast()
    {
        return view('business_account.menu.breakfast');
    }

    public function starters()
    {
        return view('business_account.menu.starters');
    }

    public function dessert()
    {
        return view('business_account.menu.dessert');
    }

    public function drinks()
    {
        return view('business_account.menu.drinks');
    }

    public function kiddies()
    {
        return view('business_account.menu.kiddies');
    }

    public function lunch()
    {
        return view('business_account.menu.lunch');
    }

    public function promo()
    {
        return view('business_account.menu.promo');
    }
}
