<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PegawaiModel;
use CodeIgniter\HTTP\ResponseInterface;

class PegawaiController extends BaseController
{
    protected $modelPegawai;
    public function __construct()
    {
        $this->modelPegawai = new PegawaiModel();
    }
    public function index()
    {
        $data['pegawai'] = $this->modelPegawai->getPegawaiWithJabatan();
        return view('pegawai/index', $data);
    }
    public function show($id)
    {

    }
        public function create()
    {
        
        return view('pegawai/create');
    }

        public function store()
    {
        $data = [
            'nama_pegawai' => $this->request->getPost('nama_pegawai'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
        ];

        $this->modelJabatan->save($data);
        return redirect()->to('jabatan');
    }

        public function edit($id)
    {
        $data['pegawai'] = $this->modelPegawai->find($id);
        return view('pegawai/edit', $data);
    }

        public function update($id)
    {
        $data = [
            'id' => $id,
            'nama_pegawai' => $this->request->getPost('nama_pegawai'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
        ];
        $this->modelPegawai->save($data);
        return redirect()->to('pegawai');
    }

        public function delete($id)
    {
        $this->modelJabatan->delete($id);
        return redirect()->to('jabatan');
    }
}
