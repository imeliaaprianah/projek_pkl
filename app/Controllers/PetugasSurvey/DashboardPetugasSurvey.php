<?php

namespace App\Controllers\PetugasSurvey;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\MDataPelPB;
use App\Models\MDataPelPD;
use App\Models\PenggunaM;

class DashboardPetugasSurvey extends BaseController
{
    protected $dataPB;
    protected $dataPD;

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

        return view('petugassurvey/dashboard_petugassurvey', $data);
    }
}
