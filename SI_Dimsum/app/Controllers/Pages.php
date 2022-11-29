<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Produk;
use App\Models\Order;

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
        return redirect()->to(base_url('cart'));
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
        return redirect()->to(base_url('cart'));
    }

    public function delete($rowid){
        $cart = \Config\Services::cart();
        $cart->remove($rowid);
        return redirect()->to(base_url('cart'));
    }
    
    public function bayar(){
        $order = new Order();
        $data = [
            
            'id'          => $this->request->getPost('ide'),
            'nama_produk' => $this->request->getPost('nama_produk'),
            'foto'        => $this->request->getPost('fotos'),
            'kuantity'    => $this->request->getPost('kuantitas'),
            'harga'       => $this->request->getPost('pricess'),
            'SubTotal'    => $this->request->getPost('subotall')       
        ];
        $order -> save($data);
        session()->setFlashdata('pesan','Dimsum telah masuk ke daftar belanja anda!!!');
        return redirect()->to(base_url('produk'));
    }

    // public function bayar(){
    //     // $cart = \Config\Services::cart();
    //     // $value=$cart->contents();
    //     $cart = \Config\Services::cart();
    //     $order = new Order();
    //     $response = ($cart->contents());
    //     // $data = json_encode($response);
    //     $serialized_data = serialize($response);
    //     foreach ($response as $key => $value){
    //         $data = "insert into orders (id,nama_produk,foto,kuantity,harga,SubTotal) value ('{$value['id']}', '{$value['name']}','{$value['foto']}','{$value['qty']}','{$value['price']}','{$value['subtotal']}'";
    //     // $order->insert(array(
    //     // $data = [
    //             // 'id'          => $this->request->getPost(json_encode($value['id'],true)),
    //             // 'nama_produk' => $this->request->getPost(json_encode($value['name'],true)),
    //             // 'foto'        => $this->request->getPost(json_encode($value['foto'],true)),
    //             // 'kuantity'    => $this->request->getPost(json_encode($value['qty'],true)),
    //             // 'harga'       => $this->request->getPost(json_encode($value['price'],true)),
    //             // 'SubTotal'    => $this->request->getPost(json_encode($value['subtotal'],true))
    //         // ];
    //     // ));
    //     // $order -> insert($data);
    //     }
    //     // $data = [
    //     //     'id'          => $this->request->getPost('id'),
    //     //     'nama_produk' => $this->request->getPost('produk'),
    //     //     'foto'        => $this->request->getPost('foto'),
    //     //     'kuantity'    => $this->request->getPost('qty'),
    //     //     'harga'       => $this->request->getPost('harga'),
    //     //     'SubTotal'    => $this->request->getPost('SubTotal')
    //     // ];

        
    //     $cart->destroy();
    //     return redirect()->to(base_url('cart'));
        

        

    // }

    public function buy(){
        return view('pages/bayar');
    }
}