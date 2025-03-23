<?php

namespace App\Controllers\PetugasSurvey;

use App\Controllers\BaseController;
use App\Models\MDataPelPB;


class TindakLanjutpsPB extends BaseController
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
        return view('petugassurvey/PasangBaru/tindak_lanjut_pb', $data);
    }


    public function edit($id)
    {
        $data = [
            'judul' => 'Edit Data Pelanggan',
            'datpel' => $this->datpel->find($id)
        ];
        return view('petugassurvey/PasangBaru/form_edit_tl_pb', $data);
    }

    public function update($id)
    {
        // Validasi input
        // $validation = $this->validate([
        //     'dokumen' => 'required|uploaded[dokumen]|max_size[dokumen,2048]|ext_in[dokumen,pdf,doc,docx,xlsx]',
        // ]);

        // if (!$validation) {
        //     return redirect()->back()->withInput()->with('validation', $this->validator);
        // }

        // Ambil data pelanggan berdasarkan ID
        $data = $this->datpel->find($id);

        if (!$data) {
            return redirect()->to('/tindak-lanjut-pb-k')->with('error', 'Data tidak ditemukan');
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
        return redirect()->to('/tindak-lanjut-pb-k')->with('pesan', 'Data berhasil diperbarui');
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
        return view('petugassurvey/PasangBaru/detail_tl_pb', ['data' => $data]);
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
