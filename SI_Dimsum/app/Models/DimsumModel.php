<?php 

namespace App\Models;
use CodeIgniter\Model;

class DimsumModel extends Model{
    protected $table = 'dimsum';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'foto',
        'judul',
        'deskripsi'
    ]; 
}
