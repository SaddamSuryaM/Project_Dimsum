<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAdmin;

class Register extends BaseController
{
    public function index()
    {
        return view('admin/register');
    }

    public function simpan()
    {
        $data = [
            'member_username' => $this->request->getPost('username'),
            'member_password' => $this->request->getPost('password'),
            'konforim_pwd' => $this->request->getPost('konforim_pwd')
        ];
        if($data['member_password'] === $data['konforim_pwd']){
            $simpan = new ModelAdmin();
            unset($data['konforim_pwd']);
            $data['member_password'] = password_hash($data['member_password'], PASSWORD_DEFAULT);
            $simpan->insert($data);
            return redirect()->to("home"); // blm tau di arahkan ke mana?
        } else {
            echo "salah";
        }
    }
}
