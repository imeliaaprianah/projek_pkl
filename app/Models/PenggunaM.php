<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaM extends Model
{
    protected $table = 'akun';
    protected $primaryKey = 'id_akun';
    protected $allowedFields = ['username', 'password', 'level'];

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

    // Get data by username (for login)
    public function getLogin($username)
    {
        return $this->where('username', $username)->first();
    }
}