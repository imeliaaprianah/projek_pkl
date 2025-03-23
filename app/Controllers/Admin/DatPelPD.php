<?php

namespace App\Controllers\Admin;

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

        return view('admin/PerubahanDaya/data_pelanggan_pd', $data);
    }

    public function tambah()
    {
        return view('admin/PerubahanDaya/tambah_data_pelanggan_pd');
    }

    public function simpan()
    {

        $validation = $this->validate([
            'idpel' => 'required|numeric',
            'alamat' => 'required',
            'nama_pelanggan' => 'required',
            'surat_mohon_perubahan_daya' => [
                'uploaded[surat_mohon_perubahan_daya]',  // File harus diunggah
                'max_size[surat_mohon_perubahan_daya,2048]', // Maks 2MB
                'ext_in[surat_mohon_perubahan_daya,pdf,jpg,png]', // Hanya PDF, JPG, PNG
            ],
            'no_handphone' => 'required|numeric',
            'ktp' => 'required|numeric',
            'npwp' => 'required|numeric',
            'daya_awal' => 'required|numeric',
            'daya_akhir' => 'required|numeric',
            'tanggal_input' => 'required|valid_date',
            'tanggal_pembuatan_surat' => 'required|valid_date'
        ]);
        if (!$validation) {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan data');
        }

        $file = $this->request->getFile('surat_mohon_perubahan_daya');
        $newFileName = '';

        if ($file->isValid() && !$file->hasMoved()) {
            $newFileName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $newFileName);
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal mengunggah file');
        }

        $this->DatPel->save([
            'idpel' => $this->request->getPost('idpel'),
            'alamat' => $this->request->getPost('alamat'),
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'surat_mohon_perubahan_daya' => $newFileName,
            'no_handphone' => $this->request->getPost('no_handphone'),
            'ktp' => $this->request->getPost('ktp'),
            'npwp' => $this->request->getPost('npwp'),
            'daya_awal' => $this->request->getPost('daya_awal'),
            'daya_akhir' => $this->request->getPost('daya_akhir'),
            'tanggal_input' => $this->request->getPost('tanggal_input'),
            'tanggal_pembuatan_surat' => $this->request->getPost('tanggal_pembuatan_surat'),
        ]);

        return redirect()->to('/data-pelanggan-pd')->with('pesan', 'Data berhasil ditambahkan');
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
        return view('admin/PerubahanDaya/detail_datpel_pd', ['data' => $data]);
    }

    public function edit($id)
    {
        $data = [
            'judul' => 'Edit Data Pelanggan',
            'DatPel' => $this->DatPel->find($id)
        ];
        return view('admin/PerubahanDaya/form_edit_datpel_pd', $data);
    }

    public function update($id)
    {

        $validation = $this->validate([
            'idpel' => 'required|numeric',
            'alamat' => 'required',
            'no_handphone' => 'required|numeric',
            'ktp' => 'required|numeric',
            'npwp' => 'required|numeric',
            'daya_awal' => 'required|numeric',
            'daya_akhir' => 'required|numeric',
            'tanggal_input' => 'required|date',
            'tanggal_pembuatan_surat' => 'required|date',
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Ambil data pelanggan berdasarkan ID
        $data = $this->DatPel->find($id);
        if (!$data) {
            return redirect()->to('/data-pelanggan-pd')->with('error', 'Data tidak ditemukan');
        }

        // Proses file unggahan jika ada file baru
        // Update data di database
        $updateData = [
            'idpel' => $this->request->getPost('idpel'),
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'no_handphone' => $this->request->getPost('no_handphone'),
            'ktp' => $this->request->getPost('ktp'),
            'npwp' => $this->request->getPost('npwp'),
            'alamat' => $this->request->getPost('alamat'),
            'daya_awal' => $this->request->getPost('daya_awal'),
            'daya_akhir' => $this->request->getPost('daya_akhir'),
            'tanggal_input' => $this->request->getPost('tanggal_input'),
            'tanggal_pembuatan_surat' => $this->request->getPost('tanggal_pembuatan_surat'),
        ];
        $file = $this->request->getFile('surat_mohon_perubahan_daya');
        $newFileName = $data['surat_mohon_perubahan_daya']; // Gunakan nama file lama jika tidak ada file baru
        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Hapus file lama jika ada
            if (file_exists(WRITEPATH . 'uploads/' . $data['surat_mohon_perubahan_daya'])) {
                unlink(WRITEPATH . 'uploads/' . $data['surat_mohon_perubahan_daya']);
            }

            // Simpan file baru
            $newFileName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $newFileName);
            $updateData['surat_mohon_perubahan_daya'] = $newFileName;
        }
        $this->DatPel->update($id, $updateData);
        // Redirect ke halaman utama dengan pesan sukses
        return redirect()->to('/data-pelanggan-pd')->with('pesan', 'Data berhasil diedit');
    }

    public function delete($id)
    {
        $this->DatPel->delete($id);
        return redirect()->to('/data-pelanggan-pd')->with('pesan', 'Data Berhasil Dihapus !!');
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
