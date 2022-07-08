<?php

namespace App\Controllers;

use App\Models\JenisProdukModel;
use App\Models\ProdukModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\RESTful\ResourceController;

class Produk extends ResourceController
{
    protected $produk;
    protected $jenis_prod;

    function __construct()
    {
        $this->produk = new ProdukModel();
        $this->jenis_prod = new JenisProdukModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        
        $data['produk'] = $this->produk->getProd();
        return view('Backend/produk/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $data['produk'] = $this->produk->where('id', $id)->first();
        $data['jenis_prod'] = $this->jenis_prod->findAll();
    
        return view('Backend/produk/detail', $data);
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
       
        $data = [
            'jenis_prod' => $this->jenis_prod->findAll(),
            'validation' => \Config\Services::validation()
        ];

        return view('Backend/produk/create', $data);
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
                ],
            'stok' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'numeric' => '{field} harus berupa angka',
                ]
                ],
            'harga_beli' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'numeric' => '{field} harus berupa angka',
                ]
                ],
            'harga_jual' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'numeric' => '{field} harus berupa angka',
                ]
                ],
            'foto' => [
                'rules' => 'uploaded[foto]|is_image[foto]',
                'errors' => [
                    'uploaded' => '{field} tidak boleh kosong'
                ]
                ],
            'jenis_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
                ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
                ],
        ])) {
            return redirect()->to('/produk/add')->withInput();
        } 
        
		$datafoto = $this->request->getFile('foto');
		$fileName = $datafoto->getName();
		
		$datafoto->move('img', $fileName);

        $this->produk->insert([
            "nama" => $this->request->getPost('nama'),
            "stok" => $this->request->getPost('stok'),
            "harga_beli" => $this->request->getPost('harga_beli'),
            "harga_jual" => $this->request->getPost('harga_jual'),
            "foto" => $fileName,
            "jenis_id" => $this->request->getPost('jenis_id'),
            "deskripsi" => $this->request->getPost('deskripsi'),
            
        ]);
        return redirect('produk');
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

        $data['produk'] = $this->produk->where('id', $id)->first();
         
        $datafoto = $this->request->getFile('foto');
        $gambarlama = $this->request->getPost('fotolama');

        if ($datafoto->getError() == 4) {
            $fileName = $gambarlama;
        } else {
            $datafoto = $this->request->getFile('foto');
            $fileName = $datafoto->getName();
            $datafoto->move('img', $fileName);
        }


        $this->produk->update($id,[
            "nama" => $this->request->getPost('nama'),
            "stok" => $this->request->getPost('stok'),
            "harga_beli" => $this->request->getPost('harga_beli'),
            "harga_jual" => $this->request->getPost('harga_jual'),
            "foto" => $fileName,
            "jenis_id" => $this->request->getPost('jenis_id'),
            "deskripsi" => $this->request->getPost('deskripsi'),
                
        ]);
        return redirect('produk');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $produk = $this->produk->find($id);

        unlink('img/'. $produk->foto );

        $this->produk->delete($id);
        return redirect('produk');
    }
}