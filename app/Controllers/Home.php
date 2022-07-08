<?php

namespace App\Controllers;

use App\Models\PesananModel;
use App\Models\ProdukModel;
use App\Models\SuplierModel;
use App\Models\UserModel;

class Home extends BaseController
{
    protected $pesanan;
    protected $produk;
    protected $user;
    protected $sup;

    function __construct()
    {
        $this->pesanan = new PesananModel();
        $this->produk = new ProdukModel();
        $this->user = new UserModel();
        $this->sup = new SuplierModel();
    }
    
    public function das()
    {
        $data = [
            'pesanan' => $this->pesanan->countAll(),
            'prod' => $this->produk->countAll(),
            'user' => $this->user->countAll(),
            'sup' => $this->sup->countAll(),
        ];
        return view('Backend/dashboard', $data);
    }

}