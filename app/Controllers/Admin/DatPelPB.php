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
        $validation = $this->validate([
            'nama_pelanggan' => 'required',
            'nama_pemohon' => 'required',
            'no_handphone' => 'required|numeric',
            'ktp' => 'required|numeric',
            'npwp' => 'required|numeric',
            'alamat_pasang_baru' => 'required',
            'tanggal_input' => 'required|valid_date',
            'tanggal_pembuatan_surat' => 'required|valid_date',
            'titik_koordinat' => 'required',
            'daya_mohon' => 'required|numeric',
            'surat_mohon_pasang_baru' => [
                'uploaded[surat_mohon_pasang_baru]',  // File harus diunggah
                'max_size[surat_mohon_pasang_baru,2048]', // Maks 2MB
                'ext_in[surat_mohon_pasang_baru,pdf,jpg,png]', // Hanya PDF, JPG, PNG
            ]
        ]);
        if (!$validation) {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan data');
        }

        $file = $this->request->getFile('surat_mohon_pasang_baru');
        $newFileName = '';

        if ($file->isValid() && !$file->hasMoved()) {
            $newFileName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $newFileName);
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal mengunggah file');
        }

        $this->datpel->save([
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'nama_pemohon' => $this->request->getPost('nama_pemohon'),
            'surat_mohon_pasang_baru' => $newFileName, // Nama file yang diunggah
            'no_handphone' => $this->request->getPost('no_handphone'),
            'ktp' => $this->request->getPost('ktp'),
            'npwp' => $this->request->getPost('npwp'),
            'alamat_pasang_baru' => $this->request->getPost('alamat_pasang_baru'),
            'tanggal_input' => $this->request->getPost('tanggal_input'),
            'tanggal_pembuatan_surat' => $this->request->getPost('tanggal_pembuatan_surat'),
            'titik_koordinat' => $this->request->getPost('titik_koordinat'),
            'daya_mohon' => $this->request->getPost('daya_mohon')
        ]);

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
            'no_handphone' => 'required|numeric',
            'ktp' => 'required|numeric',
            'npwp' => 'required|numeric',
            'alamat_pasang_baru' => 'required',
            'tanggal_input' => 'required|valid_date',
            'tanggal_pembuatan_surat' => 'required|valid_date',
            'titik_koordinat' => 'required',
            'daya_mohon' => 'required|numeric',
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('error', 'Gagal mengupdate data');
        }

        // Ambil data pelanggan berdasarkan ID
        $data = $this->datpel->find($id);
        if (!$data) {
            return redirect()->to('/data-pelanggan-pb')->with('error', 'Data tidak ditemukan');
        }

        // Ambil file yang diunggah
        $file = $this->request->getFile('surat_mohon_pasang_baru');
        $newFileName = $data['surat_mohon_pasang_baru']; // Gunakan nama file lama sebagai default

        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Hapus file lama jika ada
            if (!empty($data['surat_mohon_pasang_baru']) && file_exists(WRITEPATH . 'uploads/' . $data['surat_mohon_pasang_baru'])) {
                unlink(WRITEPATH . 'uploads/' . $data['surat_mohon_pasang_baru']);
            }

            // Simpan file baru
            $newFileName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $newFileName);
        }

        // Data yang akan diupdate
        $updateData = [
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'nama_pemohon' => $this->request->getPost('nama_pemohon'),
            'no_handphone' => $this->request->getPost('no_handphone'),
            'ktp' => $this->request->getPost('ktp'),
            'npwp' => $this->request->getPost('npwp'),
            'alamat_pasang_baru' => $this->request->getPost('alamat_pasang_baru'),
            'tanggal_input' => $this->request->getPost('tanggal_input'),
            'tanggal_pembuatan_surat' => $this->request->getPost('tanggal_pembuatan_surat'),
            'titik_koordinat' => $this->request->getPost('titik_koordinat'),
            'daya_mohon' => $this->request->getPost('daya_mohon'),
        ];

        // Hanya update file jika ada file baru yang diunggah
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $updateData['surat_mohon_pasang_baru'] = $newFileName;
        }

        // Update data di database
        $this->datpel->update($id, $updateData);

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
