<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessAccountController extends Controller
{
    public function green()
    {
        return view('business_account.business_account_green');
    }

    public function images()
    {
        return view('business_account.business_account_images');
    }

    public function info()
    {
        return view('business_account.business_account_info');
    }

    public function post()
    {
        return view('business_account.business_account_post');
    }

    public function review()
    {
        return view('business_account.business_account_review');
    }

    public function videos()
    {
        return view('business_account.business_account_videos');
    }

    public function menus()
    {
        return view('business_account.menu.layout');
    }
}
