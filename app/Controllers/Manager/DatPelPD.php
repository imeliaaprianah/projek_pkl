<?php

namespace App\Controllers\Manager;

use App\Controllers\BaseController;
use App\Models\MDataPelPD;

class DatPelPD extends BaseController
{
    protected $DatPel;

    public function __construct()
    {
        $this->DatPel = new MDataPelPD();
    }

    public function index()
    {
        $data = [
            "DataPelanggan" => $this->DatPel->findAll(),
        ];

        return view('manager/PerubahanDaya/data_pelanggan_pd', $data);
    }

    public function detail($id)
    {
        // Ambil data pelanggan berdasarkan ID
        $data = $this->DatPel->find($id);

        // Periksa apakah data ditemukan
        if (!$data) {
            return redirect()->to('/data-pelanggan-pd')->with('error', 'Data tidak ditemukan');
        }

        // Kirim data ke view
        return view('manager/PerubahanDaya/detail_datpel_pd', ['data' => $data]);
    }

    public function serveFile($filename)
    {
        $path = WRITEPATH . 'uploads/' . $filename;

        if (file_exists($path)) {
            return $this->response->setHeader('Content-Type', mime_content_type($path))
                ->setBody(file_get_contents($path));
        }

        throw new \CodeIgniter\Exceptions\PageNotFoundException('File not found');
    }
}
