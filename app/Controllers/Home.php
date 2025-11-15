<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JabatanModel;
use App\Models\PegawaiModel;
use App\Models\AssetModel;

class Home extends BaseController
{
    public function index(): string
    {
  // inisialisasi model
        $jabatanModel = new JabatanModel();
        $pegawaiModel = new PegawaiModel();
        // $assetModel   = new AssetModel();   // pastikan nama model & tabelnya sesuai

        // ambil jumlah data dari masing-masing tabel
        $data = [
            'totalJabatan' => $jabatanModel->countAllResults(),
            'totalPegawai' => $pegawaiModel->countAllResults(),
            // 'totalAssets'  => $assetModel->countAllResults(),
        ];

        // kirim ke view welcome
        return view('welcome', $data);
    }



}
