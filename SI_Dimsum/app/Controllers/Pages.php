<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Produk;

class Pages extends BaseController
{
    public function __construct(){
        $this->Produk=new Produk();
        helper('number');
        helper('form');
    }

    public function index()
    {
        return view('index');
    }
    
    public function view($page = 'home')
    {
 
        $kecuali_halaman = ['produk'];
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
                // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }else {
            if (in_array($page, $kecuali_halaman)) {
                $produk = new Produk();

                $data['produk'] = $produk->get()->getResultArray();
                return view('pages/' . $page, $data);
            }else{
                $data['title'] = ucfirst($page); // Capitalize the first letter
                return view('pages/' . $page);
            }
        }
        
        
    }

    
    public function cek(){
        $cart = \Config\Services::cart();
        $response = $cart->contents();
        echo '<pre>';
        print_r($response);
        echo '</pre>';
    }

    public function add(){
        $cart = \Config\Services::cart();
        $cart->insert(array(
            'id'      => $this->request->getPost('id'),
            'qty'     => 1,
            'foto'    => $this->request->getPost('foto'),
            'name'   => $this->request->getPost('produk'),
            'price'   => $this->request->getPost('harga')
         ));
        session()->setFlashdata('pesan','Dimsum telah masuk ke daftar belanja anda!!!');
        return redirect()->to(base_url('produk'));
    }
    
    public function clear(){
        $cart = \Config\Services::cart();
        $cart->destroy();
        return redirect()->to(base_url('cek'));
    }

    public function cart(){
        $cart = \Config\Services::cart();
        $data =[
            'title' => 'Belanja',
            'cart'=>\Config\Services::cart(),
        ];

        return view('pages\belanja',$data);
    }

    public function update(){
        $cart = \Config\Services::cart();
        $i = 1;
        foreach ($cart->contents() as $key => $value){
        $cart->update(array(
            'rowid'   => $value['rowid'],
            'qty'     => $this->request->getPost('qty'.$i++),
         ));
        }
        session()->setFlashdata('pesan','Daftar belanja dimsum anda telah berhasil di update!!!');
        return redirect()->to(base_url('cart'));
    }

    public function hapus($rowid){
        $cart = \Config\Services::cart();
        $cart->remove($rowid);
        return redirect()->to(base_url('cart'));
    }
}