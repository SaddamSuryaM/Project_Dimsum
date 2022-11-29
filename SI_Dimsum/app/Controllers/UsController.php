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
    public function index2()
    {
        if (session()->get('data')['is_admin'] == '1') {
            $USModel = new UsModel();
            $US = $USModel->findAll();

            $data = [
                'title' => 'Contact',
                'nama' => $US
            ];

            return view('admin/contact/Contact',$data);
        } else {
            return redirect()->to('/home');
        }
        
    }
    
    public function simpan()
    {
        $produk = new UsModel();

        if (session()->get('data')['is_admin'] == '1') {
            $foto = $this->request->getFile('foto');
            $upload_path = FCPATH . 'Assets/AdminLTE-3.2.0/dist/img';
            $foto_name = date('Ymd') . time() . rand(00, 99) . '.' . $foto->getClientExtension();

            if ($foto->move($upload_path, $foto_name)) {
                $data = [
                    'nama' => $this->request->getPost('nama'),
                    'npm' => $this->request->getPost('npm'),
                    'foto' => $foto_name
                ];

                $produk->insert($data);
                return redirect()->to("Teams");
            } else {
                return redirect()->to("home");
            }
        }
    }
    public function delete($id)
    {
        if (session()->get('data')['is_admin'] == '1') {
            $produkModel = new UsModel();
            $produkModel->delete($id);
            return redirect()->to('Teams');
        } else {
            return redirect()->to('home');
        }
    }

    public function edit($id)
    {
        if (session()->get('data')['is_admin'] == '1') {
            $produkModel = new UsModel();
            $data = [
                'nama' => $produkModel->find($id),
                'title' => 'Edit Contact'
            ];
            return view('admin/contact/editContact', $data);
        } else {
            return redirect()->to('home');
        }
    }

    public function create()
    {
        if (session()->get('data')['is_admin'] == '1') {
            $data = [
                'title' => 'Create Produk'
            ];
            return view('admin/contact/tambahContact', $data);
        } else {
            return redirect()->to('home');
        }
    }
    public function update($id)
    {
        if (session()->get('data')['is_admin'] == '1') {
            $produk = new UsModel();
            $foto = $this->request->getFile('foto');
            $upload_path = FCPATH . 'Assets/AdminLTE-3.2.0/dist/img';
            $foto_name = date('Ymd') . time() . rand(00, 99) . '.' . $foto->getClientExtension();

            if ($foto->move($upload_path, $foto_name)) {
                $data = [
                    'nama' => $this->request->getVar('nama'),
                    'npm' => $this->request->getVar('npm'),
                    'foto' => $foto_name
                ];

                $produk->update($id, $data);
                return redirect()->to('Teams');
            }
        } else {
            return redirect()->to("home");
        }
    }
}