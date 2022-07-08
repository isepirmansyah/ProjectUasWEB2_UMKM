<?php

namespace App\Controllers;

use App\Models\SuplierModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\RESTful\ResourceController;

class Suplier extends ResourceController
{
    protected $suplier;
    function __construct()
    {
        $this->suplier = new SuplierModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data['suplier'] = $this->suplier->findAll();
        return view('Backend/suplier/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $data['suplier'] = $this->suplier->where('id', $id)->first();
		
		if(!$data['suplier']){
			throw PageNotFoundException::forPageNotFound();
		}
        echo view('Backend/suplier/detail', $data);
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $data = [
            'title' => 'Tambah Data Suplier',
            'validation' => \Config\Services::validation()
        ];
        return view('Backend/suplier/create', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        if (!$this->validate([
            'namasup' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
                ],
            'kota' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
                ],
            'kontak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
                ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
                ],
            'telpon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
                ],
        ])) {
            return redirect()->to('/suplier/add')->withInput();
        }
        
        $this->suplier->insert([
            "namasup" => $this->request->getPost('namasup'),
            "kota" => $this->request->getPost('kota'),
            "kontak" => $this->request->getPost('kontak'),
            "alamat" => $this->request->getPost('alamat'),
            "telpon" => $this->request->getPost('telpon'),
        ]);
        
        return redirect('suplier');
        
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
        $data['suplier'] = $this->suplier->where('id', $id)->first();
         
        $this->suplier->update($id, [
            "namasup" => $this->request->getPost('nama'),
            "kota" => $this->request->getPost('kota'),
            "kontak" => $this->request->getPost('kontak'),
            "alamat" => $this->request->getPost('alamat'),
            "telpon" => $this->request->getPost('telpon'),
        ]);
        
        return redirect('suplier');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->suplier->delete($id);
        return redirect('suplier');
    }
}