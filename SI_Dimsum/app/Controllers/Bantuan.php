<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Help;

class Bantuan extends BaseController
{

    public function index()
    {
        $helpModel = new Help();
        $help = $helpModel->findAll();

        $data = [
            'title'=>'Help',
            'help' => $help
        ];

        return view('pages/bantuan',$data);
        
    }

}