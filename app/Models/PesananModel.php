<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pesanan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id','tanggal','jumlah','users_id','produk_id'];

    public function getPes()
    {
        return $this->db->table('pesanan')
        ->join('produk', 'produk.id = pesanan.produk_id')
        ->join('users', 'users.id = pesanan.users_id')
        ->get()->getResultArray();  
    }

    public function getPesku()
    {
        return $this->db->table('pesanan')
        ->join('produk', 'produk.id = pesanan.produk_id')
        ->join('users', 'users.id = pesanan.users_id')
        ->where('users_id', session()->get('id_user'))
        ->get()->getResultArray();  
    }


}