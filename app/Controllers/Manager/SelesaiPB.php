<?php

namespace App\Controllers\Manager;

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

        return view('manager/PasangBaru/selesai_pb', $data);
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
        return view('manager/PasangBaru/selesai_pb', $data);
    }

    public function export($tanggal_dari,$tanggal_sampai)
    {
        $data = [
            "datapelanggan" => $this->datpel->where('tanggal_selesai >=', $tanggal_dari)
                ->where('tanggal_selesai <=', $tanggal_sampai)
                ->findAll(),
        ];
        return view('export',$data);
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
        return view('manager/PasangBaru/detail_selesai_pb', ['data' => $data]);
    }
}
