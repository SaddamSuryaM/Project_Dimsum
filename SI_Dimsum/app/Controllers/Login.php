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
        $ModelMember = new \App\Models\ModelUser();
        $login = $this->request->getPost('login');
        if ($login) {
            $member_username = $this->request->getPost('member_username');
            $member_password = $this->request->getPost('member_password');

            if ($member_username == '' or $member_password == '') {
                $err = "silahkan masukan username dan password kembali";
            }
            if (empty($err)) {
                $dataLogin = [
                    'member_username_user' => $member_username,
                    'member_password_user' => password_verify($member_password, PASSWORD_DEFAULT)
                ];

                $dataLogin = $ModelMember->where($dataLogin)->first();
            }
            if (!empty($dataLogin)) {
                $dataLogin = [
                    'member_id_user' => $dataLogin['member_id_user'],
                    'member_username_user' => $dataLogin['member_username_user'],
                    'member_password_user' => $dataLogin['member_password_user'],
                    'is_admin' => $dataLogin['is_admin']
                ];
                $_SESSION['data'] = $dataLogin;
                if ($dataLogin['is_admin'] == '1') {
                    return redirect()->to('/HomeAdmin');
                }
                return redirect()->to('/home');
            } else {
                session()->setFlashdata('error', 'Username atau password salah');
                return redirect()->to("login");
            }

            if ($err) {
                session()->setFlashdata('member_username_user', $member_username);
                session()->setFlashdata('error', $err);
                return redirect()->to("login")->withInput()->with("error", $err);
            }
        }
    }
}
