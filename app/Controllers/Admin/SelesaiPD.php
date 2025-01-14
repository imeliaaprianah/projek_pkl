<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MDataPelPD;


class SelesaiPD extends BaseController
{
    protected $datpel;

    public function __construct()
    {
        $this->datpel = new MDataPelPD();
    }
    public function index()
    {
        $data = [
            "datapelanggan" => $this->datpel->where('status_approved', 'sudah_sesuai')->getAllData(),
        ];

        return view('admin/PerubahanDaya/selesai_pd', $data);
    }

    public function detail($id)
    {
        // Ambil data pelanggan berdasarkan ID
        $data = $this->datpel->find($id);

        // Periksa apakah data ditemukan
        if (!$data) {
            return redirect()->to('/selesai-pd')->with('error', 'Data tidak ditemukan');
        }

        // Kirim data ke view
        return view('admin/PerubahanDaya/detail_selesai_pd', ['data' => $data]);
    }
}
