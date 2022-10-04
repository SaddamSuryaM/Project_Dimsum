<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2017051022',
                'nama'    => 'Satria Sapta Nugraha',
                'alamat' => 'Kota Metro',
                'created_at' => Time::now(),
            ],
            [
                'npm' => '2017051037',
                'nama'    => 'Ahmad Muzakki',
                'alamat' => 'Natar',
                'created_at' => Time::now(),
            ],
            [
                'npm' => '2017051020',
                'nama'    => 'Nur Setiowati',
                'alamat' => 'Tanggamus',
                'created_at' => Time::now(),
            ],
            [
                'npm' => '2017051014',
                'nama'    => 'Saddam Surya',
                'alamat' => 'Sukarame',
                'created_at' => Time::now(),
            ]
        ];


        // Using Query Builder
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
