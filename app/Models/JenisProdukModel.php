<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisProdukModel extends Model
{
    protected $table = 'jenis_produk';
    protected $primaryKey = 'idJen';
    protected $returnType = 'object';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'idJen', 
        'Nama', 
    ];
}