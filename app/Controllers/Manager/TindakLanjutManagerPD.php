<?php

namespace App\Controllers\Manager;

use App\Controllers\BaseController;
use App\Models\MDataPelPD;


class TindakLanjutManagerPD extends BaseController
{
    protected $datpel;


    public function __construct()
    {
        $this->datpel = new MDataPelPD();
    }

    public function index()
    {
        $data = [
            "datapelanggan" => $this->datpel->findAll(),
        ];
        return view('manager/PerubahanDaya/tindak_lanjut_pd', $data);
    }

    public function filter()
    {
        $tanggal_dari = $this->request->getPost('tanggal_dari');
        $tanggal_sampai = $this->request->getPost('tanggal_sampai');
        $data = [
            "datapelanggan" => $this->datpel->where('tanggal_input >=', $tanggal_dari)
                ->where('tanggal_input <=', $tanggal_sampai)
                ->findAll(),
        ];
        return view('manager/PerubahanDaya/tindak_lanjut_pd', $data);
    }

    public function edit($id)
    {
        $data = [
            'judul' => 'Edit Data Pelanggan',
            'datpel' => $this->datpel->find($id)
        ];
        return view('manager/PerubahanDaya/form_edit_tl_pd', $data);
    }

    public function update($id)
    {
        // // Validasi input
        // $validation = $this->validate([
        //     'dokumen' => 'required|uploaded[dokumen]|max_size[dokumen,2048]|ext_in[dokumen,pdf,doc,docx]',
        // ]);

        // if (!$validation) {
        //     return redirect()->back()->withInput()->with('validation', $this->validator);
        // }

        // Ambil data pelanggan berdasarkan ID
        $data = $this->datpel->find($id);

        if (!$data) {
            return redirect()->to('/tindak-lanjut-pd-m')->with('error', 'Data tidak ditemukan');
        }

        // Proses file dokumen
        $file = $this->request->getFile('dokumen');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Simpan file baru
            $newFileName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $newFileName);

            // Simpan data dokumen ke database
            $this->datpel->update($id, ['dokumen_pd' => $newFileName]);
        }
        $this->datpel->update($id, [
            'status_approved' => $this->request->getPost('status_approved'),
            'tanggal_selesai' => date('Y-m-d')
        ]);

        // Redirect ke halaman utama dengan pesan sukses
        return redirect()->to('/tindak-lanjut-pd-m')->with('pesan', 'Data berhasil diperbarui');
    }

    public function detail($id)
    {
        // Ambil data pelanggan berdasarkan ID
        $data = $this->datpel->find($id);

        // Periksa apakah data ditemukan
        if (!$data) {
            return redirect()->to('/data-tl-pd')->with('error', 'Data tidak ditemukan');
        }

        // Kirim data ke view
        return view('manager/PerubahanDaya/detail_tl_pd', ['data' => $data]);
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
