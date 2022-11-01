<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        session();
        return view('pages/login');
    }
    public function admin()
    {
        $ModelMember = new \App\Models\ModelAdmin();
        $login = $this->request->getPost('login');
        if ($login) {
            $member_username = $this->request->getPost('member_username');
            $member_password = $this->request->getPost('member_password');

            if ($member_username == '' or $member_password == '') {
                $err = "silahkan masukan username dan password kembali";
            }
            if (empty($err)) {
                $dataLogin = [
                    'member_username' => $member_username,
                    'member_password' => password_verify($member_password, PASSWORD_DEFAULT)
                ];

                $dataLogin = $ModelMember->where($dataLogin)->first();
            }
            if (!empty($dataLogin)) {
                $dataLogin = [
                    'member_id' => $dataLogin['member_id'],
                    'member_username' => $dataLogin['member_username'],
                    'member_password' => $dataLogin['member_password'],
                ];
                session()->set($dataLogin);
                return redirect()->to('/HomeAdmin');
            } else {
                session()->setFlashdata('error', 'Username atau password salah');
                return redirect()->to("login");
            }

            if ($err) {
                session()->setFlashdata('member_username', $member_username);
                session()->setFlashdata('error', $err);
                return redirect()->to("login")->withInput()->with("error", $err);
            }
        }
    }
}

