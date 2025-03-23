<?php

namespace App\Models;

use CodeIgniter\Model;

class MDataPelPD extends Model
{
    protected $table            = 'data_pelanggan_pd';
    protected $primaryKey       = 'id_data_pelanggan_pd';
    protected $allowedFields    = [
        'idpel',
        'alamat',
        'nama_pelanggan',
        'no_handphone',
        'ktp',
        'npwp',
        'surat_mohon_perubahan_daya',
        'dokumen_pd',
        'status_approved',
        'daya_awal',
        'daya_akhir',
        'tanggal_input',
        'tanggal_pembuatan_surat',
        'tanggal_selesai',
        'tanggal_survey',
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
