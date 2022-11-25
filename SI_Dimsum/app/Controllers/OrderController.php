<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Order;

class OrderController extends BaseController
{
    public function __construct()
    {
        $this->Produk = new Order();
        helper('number');
        helper('form');
    }

    public function index()
    {
        $order = new Order();
        $cart = \Config\Services::cart();

        $data = [
            'title' => 'Help',
            'cart' => $cart,
            'order' => $order,
        ];
        return view('/pages/bayar', $data);
    }

    public function bayar()
    {
        $order = new Order();
        $cart = \Config\Services::cart();

        $data = [
            'order' => $this->request->getPost('ide_order'),
        ];

        foreach ($cart->contents() as $key => $value) {
            $order->insert([
                'nama_produk' => $this->request->getPost('produke' . $value['id']),
                'foto' => $this->request->getPost('fotoe' . $value['id']),
                'kuantity' => $this->request->getPost('qtye' . $value['id']),
                'harga' => $this->request->getPost('pricee' . $value['id']),
                'SubTotal' => $this->request->getPost(
                    'subtotale' . $value['id']
                ),
            ]);
        }
        $cart->destroy();
        return redirect()->to(base_url('nota'));
    }
}
