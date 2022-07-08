<?php

namespace App\Models;

use CodeIgniter\Model;

class PembelianModel extends Model
{
    protected $table = 'pembelian';
    protected $primaryKey = 'idPem';
    protected $returnType = 'object';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'idPem', 
        'tanggal', 
        'jumlah', 
        'harga', 
        'produk_id', 
        'suplier_id'
    ];

    public function getPem()
    {
        return $this->db->table('pembelian')
        ->join('produk', 'produk.id = pembelian.produk_id')
        ->join('suplier', 'suplier.id = pembelian.suplier_id')
        ->get()->getResultArray();  
    }
}