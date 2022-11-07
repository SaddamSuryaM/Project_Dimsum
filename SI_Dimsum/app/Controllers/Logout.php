<?php

namespace App\Controllers;

use App\Models\Mahasiswa;

class Logout extends BaseController
{
    public function index()
    {
        return view('pages/login');
    }
    public function logout()
    {
        $_SESSION['data'] = null;
        session()->destroy();
        return redirect()->to('/home');
    }
}