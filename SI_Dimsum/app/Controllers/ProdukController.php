<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProdukController extends BaseController
{
    public function index()
    {
        return view('pages/produk');
    }
}
