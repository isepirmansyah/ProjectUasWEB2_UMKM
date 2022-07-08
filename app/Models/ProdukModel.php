<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id', 
        'nama', 
        'stok', 
        'harga_beli', 
        'harga_jual', 
        'foto', 
        'jenis_id', 
        'deskripsi'
    ];

    public function getProd()
    {
        return $this->db->table('produk')
        ->join('jenis_produk', 'jenis_produk.idJen = produk.jenis_id')
        ->get()->getResult();  
    }
}