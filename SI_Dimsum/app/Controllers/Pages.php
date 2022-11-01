<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa;
use App\Models\Produk;

class Pages extends BaseController
{
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
}