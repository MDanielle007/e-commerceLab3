<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ShopMainController extends BaseController
{
    public function index()
    {
        $data = [
            'activePage' => 'Home',
            'heroSection' => 'Home'
        ];
        return view('ShopMain\Home',$data);
    }

    public function shop(){
        $data = [
            'activePage' => 'Shop',
            'heroSection' => 'Shop'
        ];
        return view('ShopMain\Shop',$data);
    }

    public function aboutUs(){
        $data = [
            'activePage' => 'About',
            'heroSection' => 'About'
        ];
        return view('ShopMain\About',$data);
    }

    public function shopServices(){
        $data = [
            'activePage' => 'Services',
            'heroSection' => 'Services'
        ];
        return view('ShopMain\Services',$data);
    }

    public function contactSection(){
        $data = [
            'activePage' => 'Contact',
            'heroSection' => 'Contact'
        ];
        return view('ShopMain\Contact',$data);
    }
}
