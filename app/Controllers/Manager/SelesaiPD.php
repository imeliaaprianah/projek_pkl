<?php

namespace App\Controllers\Manager;

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

        return view('manager/PerubahanDaya/selesai_pd', $data);
    }

    public function filterselesai()
    {

        $tanggal_dari = $this->request->getPost('tanggal_dari');
        $tanggal_sampai = $this->request->getPost('tanggal_sampai');
        $data = [
            "datapelanggan" => $this->datpel->where('tanggal_selesai >=', $tanggal_dari)
                ->where('tanggal_selesai <=', $tanggal_sampai)
                ->findAll(),
            "tanggal_dari" => $tanggal_dari,
            "tanggal_sampai" => $tanggal_sampai,
            "filter" => true
        ];
        return view('manager/PerubahanDaya/selesai_pd', $data);
    }

    public function export($tanggal_dari, $tanggal_sampai)
    {
        $data = [
            "datapelanggan" => $this->datpel->where('tanggal_selesai >=', $tanggal_dari)
                ->where('tanggal_selesai <=', $tanggal_sampai)
                ->findAll(),
        ];
        return view('exportPD', $data);
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
        return view('manager/PerubahanDaya/detail_selesai_pd', ['data' => $data]);
    }
}
