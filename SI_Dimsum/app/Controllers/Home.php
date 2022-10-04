<?php

namespace App\Controllers;

use App\Models\Mahasiswa;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    
}
