<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MDataPelPB;
use App\Models\MDataPelPD;
use App\Models\PenggunaM;

class DashboardAdmin extends BaseController
{
    protected $dataPB;
    protected $dataPD;
    protected $pengguna;

    public function __construct()
    {
        $this->dataPB = new MDataPelPB();
        $this->dataPD = new MDataPelPD();
        $this->pengguna = new PenggunaM();
    }

    public function index()
    {
        $data = [
            'total_pb' => $this->dataPB->countAll(),
            'total_pd' => $this->dataPD->countAll(),
            'total_pengguna' => $this->pengguna->countAll()
        ];

        return view('admin/dashboard_admin', $data);
    }
}
