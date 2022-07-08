<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\RESTful\ResourceController;

class User extends ResourceController
{
    protected $user;
    function __construct()
    {
        $this->user = new UserModel();
        $this->session = session();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data['user'] = $this->user->findAll();
        return view('Backend/user/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $data['user'] = $this->user->where('id', $id)->first();
		
		if(!$data['user']){
			throw PageNotFoundException::forPageNotFound();
		}
        echo view('Backend/user/detail', $data);
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $data = [
            
            'validation' => \Config\Services::validation()
        ];
        return view('Backend/user/create', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => '{field} sudah terdaftar gunakan nama lain'
                ]
                ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
                ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
                ],
        ])) {
            return redirect()->to('/user/add')->withInput();
        } 

        $this->user->insert([
            "username" => $this->request->getPost('username'),
            "password" => md5($this->request->getPost('password')),
            "email" => $this->request->getPost('email'),
            "status" => $this->request->getPost('status'),
            "role" => $this->request->getPost('role'),
           
        ]);

        return redirect('user');
    
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
        $data['user'] = $this->user->where('id', $id)->first();
         
        $this->user->update($id, [
            "username" => $this->request->getPost('username'),
            "password" => md5($this->request->getPost('password')),
            "email" => $this->request->getPost('email'),
            "status" => $this->request->getPost('status'),
            "role" => $this->request->getPost('role'),
           
        ]);
       
        return redirect('user');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->user->delete($id);
        return redirect('user');
    }

    public function login()
    {
        if (session('username')) {
            return view('layout/app');
        }
        return view('Frontend/login');
    }

    public function proseslog() {
        
        //ambil data dari form
        $data = $this->request->getPost();
        
        //ambil data user di database yang usernamenya sama 
        $user = $this->user->where('username', $data['username'])->first();
         
        //cek apakah username ditemukan
        if($user){
            //cek password
            //jika salah arahkan lagi ke halaman login
            if($user->password != md5($data['password'])){
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to('/login');
            }
            else{
                //jika benar, arahkan user masuk ke aplikasi 
                $sessLogin = [
                    'isLogin' => true,
                    'id_user' => $user->id,
                    'username' => $user->username,
                    'role' => $user->role
                    ];
                    
                $this->session->set($sessLogin);
                $session = session();
                if ($session->get('role') == 'public') {
                    return redirect()->to('/');
                } elseif ($session->get('role') == 'administrator') {
                    return redirect()->to('/dashboard');
                }
            }
        }
        else{
            //jika username tidak ditemukan, balikkan ke halaman login
            session()->setFlashdata('username', 'Username tidak ditemukan');
            return redirect()->to('/login');
        }
    
    }

    public function register()
    {
        return view('Frontend/registrasi');
    }

    public function prosesreg()
    {
        //tangkap data dari form 
        $data = $this->request->getPost();
        
        //hash password digabung dengan salt
        $password = md5($data['password']);
        
        //masukan data ke database
        $this->user->save([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $password,
            'role' => 'public',
            'status' => 1
            ]);
        
        //arahkan ke halaman login
        session()->setFlashdata('login', 'Anda berhasil mendaftar, silahkan login');
        return redirect()->to('/login');
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/');
    }

}