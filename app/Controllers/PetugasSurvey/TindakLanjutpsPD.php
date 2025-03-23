<?php

namespace App\Controllers\PetugasSurvey;

use App\Controllers\BaseController;
use App\Models\MDataPelPD;


class TindakLanjutpsPD extends BaseController
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
        return view('petugassurvey/PerubahanDaya/tindak_lanjut_pd', $data);
    }

    public function edit($id)
    {
        $data = [
            'judul' => 'Edit Data Pelanggan',
            'datpel' => $this->datpel->find($id)
        ];
        return view('petugassurvey/PerubahanDaya/form_edit_tl_pd', $data);
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
            return redirect()->to('/tindak-lanjut-pd-k')->with('error', 'Data tidak ditemukan');
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

        // Ambil input hasil_survey dari request
        $hasil_survey = $this->request->getPost('hasil_survey');

        // Pastikan hasil_survey sesuai dengan enum ('perluasan' atau 'non_perluasan')
        if (!in_array($hasil_survey, ['perluasan', 'non_perluasan'])) {
            return redirect()->to('/tindak-lanjut-pd-k')->with('error', 'Hasil survey tidak valid');
        }

        $this->datpel->update($id, [
            'status_approved' => 'pending',
            'tanggal_survey' => date('Y-m-d'), // Menyimpan tanggal survey dengan format YYYY-MM-DD
            'hasil_survey' => $hasil_survey
        ]);

        // Redirect ke halaman utama dengan pesan sukses
        return redirect()->to('/tindak-lanjut-pd-k')->with('pesan', 'Data berhasil diperbarui');
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
        return view('petugassurvey/PerubahanDaya/detail_tl_pd', ['data' => $data]);
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