<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Produk;

class ProdukController extends BaseController
{
    public function index()
    {
        $produkModel = new Produk();
        $produk = $produkModel->findAll();

        $data = [
            'title'=>'Produk',
            'produk' => $produk
        ];

        return view('admin/produk/Produk',$data);
    }

    public function simpan()
    {
        $produk = new Produk();

        $foto = $this->request->getFile('foto');
        $upload_path = FCPATH . 'Assets/AdminLTE-3.2.0/dist/img/produk';
        $foto_name = date('Ymd') . time() . rand(00, 99) . '.' . $foto->getClientExtension();
        
        if ($foto->move($upload_path, $foto_name)) {
            $data = [
                'produk' => $this->request->getPost('produk'),
                'foto' => $foto_name,
                'desk' => $this->request->getPost('desk'),
                'harga' => $this->request->getPost('harga')
            ];

            $produk->insert($data);
            return redirect()->to("HomeAdmin");
        }
    }
    public function delete($id)
    {
        $produkModel = new Produk();
        $produkModel->delete($id);
        return redirect()->to('HomeAdmin');
    }
    
    public function edit($id)
    {
        $produkModel = new Produk();
        
        $data = [
            'produk' => $produkModel->find($id),
            'title' => 'Edit Produk'
        ];
        return view('admin/produk/editProduk', $data);
    }

    public function create(){
        $data = [
            'title'=>'Create Produk'
        ];

        return view('admin/produk/tambahProduk', $data);
    }
    public function update($id){
        $produk = new Produk();

        $foto = $this->request->getFile('foto');
        $upload_path = FCPATH . 'Assets/AdminLTE-3.2.0/dist/img/produk';
        $foto_name = date('Ymd') . time() . rand(00, 99) . '.' . $foto->getClientExtension();
        
        if ($foto->move($upload_path, $foto_name)) {
            $data = [
                'produk' => $this->request->getVar('produk'),
                'foto' => $foto_name,
                'desk' => $this->request->getVar('desk'),
                'harga' => $this->request->getVar('harga')
            ];

            $produk->update($id,$data);
            return redirect()->to('/HomeAdmin');
        } 
    }
}
