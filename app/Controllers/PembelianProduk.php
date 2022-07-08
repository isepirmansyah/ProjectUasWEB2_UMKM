<?php

namespace App\Controllers;

use App\Models\PembelianModel;
use App\Models\ProdukModel;
use App\Models\SuplierModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\RESTful\ResourceController;

class PembelianProduk extends ResourceController
{
    protected $pembelian;
    protected $prod;
    protected $supl;
    function __construct()
    {
        $this->pembelian = new PembelianModel();
        $this->prod = new ProdukModel();
        $this->supl = new SuplierModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data['pembelian'] = $this->pembelian->getPem();
        return view('Backend/pembelian/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
    
        $data = [
            'pembelian' => $this->pembelian->where('idPem', $id)->first(),
            'prod' => $this->prod->findAll(),
            'supl' => $this->supl->findAll()
        ];
	
        echo view('Backend/pembelian/detail', $data);
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $data = [
            'prod' => $this->prod->findAll(),
            'supl' => $this->supl->findAll(),
            'title' => 'Tambah Data Jenis Produk',
            'validation' => \Config\Services::validation()
        ];
    
        return view('Backend/pembelian/create', $data);

    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        if (!$this->validate([
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
                ],
            'jumlah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
                ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
                ],
            'produk_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
                ],
            'suplier_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
                ],
        ])) {
            return redirect()->to('/pembelian/add')->withInput();
        } 

        $this->pembelian->insert([
            "tanggal" => $this->request->getPost('tanggal'),
            "jumlah" => $this->request->getPost('jumlah'),
            "harga" => $this->request->getPost('harga'),
            "produk_id" => $this->request->getPost('produk_id'),
            "suplier_id" => $this->request->getPost('suplier_id'),
            
        ]);
        return redirect('pembelian');
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
        $data['pembelian'] = $this->pembelian->where('idPem', $id)->first();
         
        $this->pembelian->update($id, [
            "tanggal" => $this->request->getPost('tgl'),
            "jumlah" => $this->request->getPost('jumlah'),
            "harga" => $this->request->getPost('harga'),
            "produk_id" => $this->request->getPost('produk_id'),
            "suplier_id" => $this->request->getPost('suplier_id'),
        ]);
        return redirect('pembelian');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->pembelian->delete($id);
        return redirect('pembelian');
    }
}