<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductsModel;

class AdminController extends BaseController
{
    private $furnitures;

    function __construct()
    {
        $this->furnitures = new ProductsModel();
    }

    public function index()
    {
        $data = [
            'activePage' => 'Dashboard'
        ]; 
        return view('Admin/index', $data);
    }

    public function viewProducts()
    {
        $data = [
            'activePage' => 'Products',
            'products' => $this->furnitures->findAll()
        ]; 
        return view('Admin/Products', $data);
        
    }
}
