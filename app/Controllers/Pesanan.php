<?php

namespace App\Controllers;

use App\Models\PesananModel;
use App\Models\ProdukModel;
use CodeIgniter\RESTful\ResourceController;

class Pesanan extends ResourceController
{
    protected $pesanan;
    protected $produk;
    function __construct()
    {
        $this->pesanan = new PesananModel();
        $this->produk = new ProdukModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data['pesanan'] = $this->pesanan->getPes();
        return view('Backend/pesanan/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $data['produk'] = $this->produk->where('id', $id)->first();
        return view('Frontend/shop-details', $data);
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        if(!session('username')){
            return redirect()->to('/login'); 
         }

        $this->pesanan->insert([
            "tanggal" => $this->request->getPost('tgl'),
            "jumlah" => $this->request->getPost('jumlah'),
            "users_id" => $this->request->getPost('user_id'),
            "produk_id" => $this->request->getPost('produk_id'),
            
        ]);
        return redirect()->to('/pesananku');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->pesanan->delete($id);
        return redirect('pesanan');
    }
}