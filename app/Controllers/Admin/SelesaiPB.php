<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MDataPelPB;


class SelesaiPB extends BaseController
{
    protected $datpel;

    public function __construct()
    {
        $this->datpel = new MDataPelPB();
    }
    public function index()
    {
        $data = [
            "datapelanggan" => $this->datpel->where('status_approved', 'sudah_sesuai')->getAllData(),
        ];

        return view('admin/PasangBaru/selesai_pb', $data);
    }


    public function detail($id)
    {
        // Ambil data pelanggan berdasarkan ID
        $data = $this->datpel->find($id);

        // Periksa apakah data ditemukan
        if (!$data) {
            return redirect()->to('/selesai-pb')->with('error', 'Data tidak ditemukan');
        }

        // Kirim data ke view
        return view('admin/PasangBaru/detail_selesai_pb', ['data' => $data]);
    }
}
