<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Order;

class BelanjaController extends BaseController
{
    public function index()
    {
        return view('pages/belanja');
    }

    public function buy($id){

        $buyModel = new Order();
        $buy = $buyModel->find($id);
        $item = array(
            'id' => $buy['id'],
            'produk' => $buy['produk'],
            'foto' => $buy['foto'],
            'harga' => $buy['harga'],
            'quantity' => 1
        );
        $this->cart->insert($item);
        
        return $this->response->redirect(site_url('produk'));
    } 
    
}
