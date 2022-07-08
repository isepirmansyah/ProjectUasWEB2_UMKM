<?php

namespace App\Controllers;

use App\Models\JenisProdukModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\RESTful\ResourceController;

class JenisProduk extends ResourceController
{
    protected $jenisprod;
    function __construct()
    {
        $this->jenisprod = new JenisProdukModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data['jenisprod'] = $this->jenisprod->findAll();
        return view('Backend/jenis_produk/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $data['jenisprod'] = $this->jenisprod->where('idJen', $id)->first();
		
		if(!$data['jenisprod']){
			throw PageNotFoundException::forPageNotFound();
		}
        return view('Backend/jenis_produk/detail', $data);
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
      
        $data = [
            'title' => 'Tambah Data Jenis Produk',
            'validation' => \Config\Services::validation()
        ];

        return view('Backend/jenis_produk/create', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {

        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
                ]
        ])) {
            return redirect()->to('/jenis_produk/add')->withInput();
        } 

        $this->jenisprod->insert([
            "Nama" => $this->request->getPost('nama'),
        
        ]);
        session()->setFlashdata('message', 'Berhasil');
        return redirect('jenis_produk');
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
        
        $data['jenisprod'] = $this->jenisprod->where('idJen', $id)->first();
         
        $this->jenisprod->update($id, [
            "Nama" => $this->request->getPost('nama'),
           
        ]);
        return redirect('jenis_produk');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->jenisprod->delete($id);
        return redirect('jenis_produk');
    }
}