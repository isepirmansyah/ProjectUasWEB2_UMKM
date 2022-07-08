<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PesananModel;
use App\Models\ProdukModel;

class Frontend extends BaseController
{
    protected $produk;
    protected $pesanan;

    function __construct()
    {
        $this->produk = new ProdukModel();
        $this->pesanan = new PesananModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data['produk'] = $this->produk->findAll();
        return view('Frontend/index', $data);
    }

    public function shop()
    {
        $data['produk'] = $this->produk->findAll();
        return view('Frontend/shop', $data);
    }

    public function about_us()
    {
        return view('Frontend/about');
    }

    public function shop_detail()
    {
        return view('Frontend/shop-details');
    }

    public function shoping_cart()
    {
        $data['pesananku'] = $this->pesanan->getPesku();
        return view('Frontend/shopping-cart', $data);
    }

    public function check_out()
    {
        return view('Frontend/checkout');
    }

    public function blog_detail()
    {
        return view('Frontend/blog-details');
    }

    public function blog()
    {
        return view('Frontend/blog');
    }
    
    public function kontak()
    {
        return view('Frontend/contact');
    }

    public function delete($id = null)
    {
        $this->pesanan->delete($id);
        return redirect('pesananku');
    }
}