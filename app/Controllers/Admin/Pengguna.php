<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PenggunaM;

class Pengguna extends BaseController
{
    protected $akun;

    public function __construct()
    {
        $this->akun = new PenggunaM();
    }

    public function index()
    {
        $data = [
            "dataakun" => $this->akun->findAll(),
        ];
        return view('admin/Pengguna/pengguna', $data);
    }

    public function tambah()
    {
        $data = [
            'judul' => 'Edit Akun',
        ];
        return view('admin/Pengguna/tambah_pengguna');
    }

    public function simpan()
    {
        $pwd = $this->request->getVar('password');
        $hash_password = password_hash("$pwd", PASSWORD_BCRYPT);
        $this->akun->insert([
            'username' => $this->request->getPost('username'),
            //hash password
            'password' => $hash_password,
            'level' => $this->request->getPost('level')
        ]);
        return redirect()->to('/pengguna')->with('pesan', 'Data Berhasil Ditambah !!');
    }

    public function edit($id)
    {
        $data = [
            'judul' => 'Edit Akun',
            'akun' => $this->akun->find($id)
        ];
        return view('admin/Pengguna/form_edit_pengguna', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id_akun');

        // Cek apakah password diubah
        $pwd = $this->request->getVar('password');
        if ($pwd) {
            $hash_password = password_hash($pwd, PASSWORD_BCRYPT);
        } else {
            // Ambil password lama jika tidak ada input password baru
            $akun = $this->akun->find($id);
            $hash_password = $akun['password']; // Tidak mengubah password
        }

        // Update data
        $this->akun->update($id, [
            'username' => $this->request->getPost('username'),
            'password' => $hash_password,
            'level' => $this->request->getPost('level')
        ]);

        return redirect()->to('/pengguna')->with('pesan', 'Data Berhasil Diedit !!');
    }

    public function delete($id)
    {
        $this->akun->delete($id);
        return redirect()->to('/pengguna')->with('pesan', 'Data Berhasil Dihapus !!');
    }
}
