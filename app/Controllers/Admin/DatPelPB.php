<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MDataPelPB;

class DatPelPB extends BaseController
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
        return view('admin/PasangBaru/data_pelanggan_pb', $data);
    }

    public function tambah()
    {
        return view('admin/PasangBaru/tambah_data_pelanggan_pb');
    }

    public function simpan()
    {
        // Validasi input
        $validation = $this->validate([
            'nama_pelanggan' => 'required',
            'nama_pemohon' => 'required',
            'surat_mohon_pasang_baru' => 'uploaded[surat_mohon_pasang_baru]|max_size[surat_mohon_pasang_baru,2048]|ext_in[surat_mohon_pasang_baru,pdf]',
            'no_handphone' => 'required|numeric',
            'ktp' => 'required|numeric',
            'npwp' => 'required|numeric',
            'alamat_pasang_baru' => 'required',
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Proses file unggahan
        $file = $this->request->getFile('surat_mohon_pasang_baru');
        if ($file->isValid() && !$file->hasMoved()) {
            $newFileName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $newFileName);
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal mengunggah file');
        }

        // Simpan data ke database
        $this->datpel->save([
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'nama_pemohon' => $this->request->getPost('nama_pemohon'),
            'surat_mohon_pasang_baru' => $newFileName, // Nama file yang diunggah
            'no_handphone' => $this->request->getPost('no_handphone'),
            'ktp' => $this->request->getPost('ktp'),
            'npwp' => $this->request->getPost('npwp'),
            'alamat_pasang_baru' => $this->request->getPost('alamat_pasang_baru'),
        ]);

        // Redirect ke halaman utama dengan pesan sukses
        return redirect()->to('/data-pelanggan-pb')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function detail($id)
    {
        // Ambil data pelanggan berdasarkan ID
        $data = $this->datpel->find($id);

        // Periksa apakah data ditemukan
        if (!$data) {
            return redirect()->to('/data-pelanggan-pb')->with('error', 'Data tidak ditemukan');
        }

        // Kirim data ke view
        return view('admin/PasangBaru/detail_datpel_pb', ['data' => $data]);
    }

    public function edit($id)
    {
        $data = [
            'judul' => 'Edit Data Pelanggan',
            'datpel' => $this->datpel->find($id)
        ];
        return view('admin/PasangBaru/form_edit_datpel_pb', $data);
    }

    public function update($id)
    {
        // Validasi input
        $validation = $this->validate([
            'nama_pelanggan' => 'required',
            'nama_pemohon' => 'required',
            'surat_mohon_pasang_baru' => 'if_exist|uploaded[surat_mohon_pasang_baru]|max_size[surat_mohon_pasang_baru,2048]|ext_in[surat_mohon_pasang_baru,pdf]',
            'no_handphone' => 'required|numeric',
            'ktp' => 'required|numeric',
            'npwp' => 'required|numeric',
            'alamat_pasang_baru' => 'required',
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Ambil data pelanggan berdasarkan ID
        $data = $this->datpel->find($id);
        if (!$data) {
            return redirect()->to('/data-pelanggan-pb')->with('error', 'Data tidak ditemukan');
        }

        // Proses file unggahan jika ada file baru
        $file = $this->request->getFile('surat_mohon_pasang_baru');
        $newFileName = $data['surat_mohon_pasang_baru']; // Gunakan nama file lama jika tidak ada file baru
        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Hapus file lama jika ada
            if (file_exists(WRITEPATH . 'uploads/' . $data['surat_mohon_pasang_baru'])) {
                unlink(WRITEPATH . 'uploads/' . $data['surat_mohon_pasang_baru']);
            }

            // Simpan file baru
            $newFileName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $newFileName);
        }

        // Update data di database
        $this->datpel->update($id, [
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'nama_pemohon' => $this->request->getPost('nama_pemohon'),
            'surat_mohon_pasang_baru' => $newFileName,
            'no_handphone' => $this->request->getPost('no_handphone'),
            'ktp' => $this->request->getPost('ktp'),
            'npwp' => $this->request->getPost('npwp'),
            'alamat_pasang_baru' => $this->request->getPost('alamat_pasang_baru'),
        ]);

        // Redirect ke halaman utama dengan pesan sukses
        return redirect()->to('/data-pelanggan-pb')->with('pesan', 'Data berhasil diedit');
    }

    public function delete($id)
    {
        $this->datpel->delete($id);
        return redirect()->to('/data-pelanggan-pb')->with('pesan', 'Data Berhasil Dihapus !!');
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
