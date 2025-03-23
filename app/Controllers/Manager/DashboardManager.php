<?php

namespace App\Controllers\Manager;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\MDataPelPB;
use App\Models\MDataPelPD;
use App\Models\PenggunaM;

class DashboardManager extends BaseController
{
    protected $dataPB;
    protected $dataPD;
    // protected $pengguna;

    public function __construct()
    {
        $this->dataPB = new MDataPelPB();
        $this->dataPD = new MDataPelPD();
    }
    public function index()
    {
        $data = [
            'total_pb' => $this->dataPB->countAll(),
            'total_pd' => $this->dataPD->countAll()
        ];

        return view('manager/dashboard_manager', $data);
    }
}
