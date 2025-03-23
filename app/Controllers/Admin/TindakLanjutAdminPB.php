<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MDataPelPB;


class TindakLanjutAdminPB extends BaseController
{
    protected $datpel;


    public function __construct()
    {
        $this->datpel = new MDataPelPB();
    }

    public function index()
    {
        $data = [
            "datapelanggan" => $this->datpel->findAll(),
        ];
        return view('admin/PasangBaru/tindak_lanjut_pb', $data);
    }

    public function edit($id)
    {
        $data = [
            'judul' => 'Edit Data Pelanggan',
            'datpel' => $this->datpel->find($id)
        ];
        return view('admin/PasangBaru/form_edit_tl_pb', $data);
    }

    public function update($id)
    {
        // Validasi input
        $validation = $this->validate([
            'dokumen_pb' => [
                'uploaded[dokumen_pb]',  // File harus diunggah
                'max_size[dokumen_pb,2048]', // Maksimal 2MB
                'ext_in[dokumen_pb,pdf,jpg,png]', // Hanya PDF, JPG, PNG
            ],
            'hasil_survey' => 'required', // Hanya boleh 'perluasan' atau 'non_perluasan'
            'status_approved' => 'required'
        ]);
        if (!$validation) {
            return redirect()->back()->withInput()->with('error', 'Validasi gagal, periksa input Anda.');
        }

        // Ambil data pelanggan berdasarkan ID
        $data = $this->datpel->find($id);

        if (!$data) {
            return redirect()->to('/tindak-lanjut-pb')->with('error', 'Data tidak ditemukan');
        }

        // Proses file dokumen
        $file = $this->request->getFile('dokumen');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Simpan file baru
            $newFileName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $newFileName);

            // Simpan data dokumen ke database
            $this->datpel->update($id, ['dokumen_pb' => $newFileName]);
        }
        // Ambil input hasil_survey dari request
        $hasil_survey = $this->request->getPost('hasil_survey');

        // Pastikan hasil_survey sesuai dengan enum ('perluasan' atau 'non_perluasan')
        if (!in_array($hasil_survey, ['perluasan', 'non_perluasan'])) {
            return redirect()->to('/tindak-lanjut-pb-k')->with('error', 'Hasil survey tidak valid');
        }

        // Simpan status_approved, tanggal_survey, dan hasil_survey
        $this->datpel->update($id, [
            'status_approved' => 'pending',
            'tanggal_survey' => date('Y-m-d'), // Menyimpan tanggal survey dengan format YYYY-MM-DD
            'hasil_survey' => $hasil_survey
        ]);
        // Redirect ke halaman utama dengan pesan sukses
        return redirect()->to('/tindak-lanjut-pb')->with('pesan', 'Data berhasil diperbarui');
    }

    public function detail($id)
    {
        // Ambil data pelanggan berdasarkan ID
        $data = $this->datpel->find($id);

        // Periksa apakah data ditemukan
        if (!$data) {
            return redirect()->to('/data-tl-pb')->with('error', 'Data tidak ditemukan');
        }

        // Kirim data ke view
        return view('admin/PasangBaru/detail_tl_pb', ['data' => $data]);
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

    public function delete($id)
    {
        $this->datpel->delete($id);
        return redirect()->to('/tindak-lanjut-pb')->with('pesan', 'Data Berhasil Dihapus !!');
    }
}
