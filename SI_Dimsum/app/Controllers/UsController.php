<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsModel;

class UsController extends BaseController
{
    public function index()
    {
        $USModel = new UsModel();
        $US = $USModel->findAll();

        $data = [
            'title' => 'Contact',
            'nama' => $US
        ];

        return view('pages/contact',$data);
    }
}
