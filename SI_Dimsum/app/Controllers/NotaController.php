<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Order;

class NotaController extends BaseController
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
        $orderModel = $order->findAll();

        $data = [
            'title' => 'Help',
            'nota' => $orderModel
        ];
        return view('pages/nota', $data);
    }
}
