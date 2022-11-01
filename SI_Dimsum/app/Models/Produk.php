<?php

namespace App\Models;

use CodeIgniter\Model;

class Produk extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'produks';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['produk', 'foto', 'desk', 'harga'];
}
