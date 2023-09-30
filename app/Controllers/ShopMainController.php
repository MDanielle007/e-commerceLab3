<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductsModel;

class ShopMainController extends BaseController
{
    private $furnitures;

    function __construct()
    {
        $this->furnitures = new ProductsModel();
    }

    public function index()
    {
        $products = $this->furnitures
        ->select('*')
        ->limit(3)
        ->get()
        ->getResultArray();
        $data = [
            'activePage' => 'Home',
            'heroSection' => 'Home',
            'products' => $products
        ];

        return view('ShopMain\Home',$data);
    }

    public function shop(){
        $data = [
            'activePage' => 'Shop',
            'heroSection' => 'Shop',
            'products' => $this->furnitures->findAll()
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
        $products = $this->furnitures
        ->select('*')
        ->limit(3)
        ->get()
        ->getResultArray();

        $data = [
            'activePage' => 'Services',
            'heroSection' => 'Services',
            'products' => $products
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
