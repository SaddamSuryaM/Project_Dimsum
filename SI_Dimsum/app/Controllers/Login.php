<?php

namespace App\Controllers;

use App\Models\Mahasiswa;

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
                $dataMember = $ModelMember->where(
                    "member_username",
                    $member_username
                )->first();
                if ($dataMember['member_password'] != ($member_password)) {
                    $err = "password tidak sesuai";
                }
            }
            if (empty($err)) {
                $dataSesi = [
                    'member_id' => $dataMember['member_id'],
                    'member_username' => $dataMember['member_username'],
                    'member_password' => $dataMember['member_password'],
                ];
                session()->set($dataSesi);
                return redirect()->to('/home');
            }

            if ($err) {
                session()->setFlashdata('member_username', $member_username);
                session()->setFlashdata('error', $err);
                return redirect()->to("login")->withInput()->with("error", $err);
            }
        }
    }
}
