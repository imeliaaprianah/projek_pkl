<?php

namespace App\Models;

use CodeIgniter\Model;

class MDataPelPB extends Model
{
    protected $table            = 'data_pelanggan_pb';
    protected $primaryKey       = 'id_data_pelanggan_pb';
    protected $allowedFields    = [
        'nama_pelanggan',
        'nama_pemohon',
        'surat_mohon_pasang_baru',
        'no_handphone',
        'ktp',
        'npwp',
        'alamat_pasang_baru',
        'dokumen_pb',
        'status_approved',
        'daya_mohon',
        'tanggal_input',
        'tanggal_pembuatan_surat',
        'titik_koordinat',
        'tanggal_survey',
        'tanggal_selesai',
        'hasil_survey'
    ];

    // Get all data
    public function getAllData()
    {
        return $this->findAll();
    }

    // Get data by ID
    public function getDataById($id)
    {
        return $this->find($id);
    }

    // Add new data
    public function addData($data)
    {
        return $this->insert($data);
    }

    // Update data by ID
    public function updateData($id, $data)
    {
        return $this->update($id, $data);
    }

    // Delete data by ID
    public function deleteData($id)
    {
        return $this->delete($id);
    }
}
