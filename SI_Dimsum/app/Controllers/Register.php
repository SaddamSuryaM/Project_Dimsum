<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class Register extends BaseController
{
     public function __construct(){
        $this->modelUser = new ModelUser();
    }
    
    public function index()
    {
        if (session()->get('data')) {
            return redirect()->to(base_url('home'));
        }
        return view('admin/register');
    }

    public function simpan()
    {
         if($this->request->getVar('conf_member_password') != $this->request->getVar('member_password')){
            session()->setFlashdata('error', 'Password tidak sama');
            return redirect()->to(base_url('daftar'));
        }else{
            $data = [
                "member_username_user" => $this->request->getVar('member_username'),
                "member_password_user" => password_hash($this->request->getVar('member_password'), PASSWORD_DEFAULT),
                'is_admin' => "0"
            ];
            
            $this->modelUser->insert($data);
            session()->setFlashdata('success', 'Berhasil mendaftar');
            return redirect()->to(base_url('loginuser'));
        }
}
