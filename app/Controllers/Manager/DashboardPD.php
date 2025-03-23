<?php

namespace App\Controllers\Manager;

use App\Controllers\BaseController;
use App\Models\MDataPelPD;

class Dashboardpd extends BaseController
{
    protected $datpel;


    public function __construct()
    {
        $this->datpel = new MDataPelPD();
    }
    public function index()
    {

        $data = [
            "datapelanggan_sudah_survei" => $this->datpel->where('dokumen_pd !=', null)->countAllResults(),
            "datapelanggan_belum_survei" => $this->datpel->where('dokumen_pd', null)->countAllResults(),
        ];
        
        return view('manager/PerubahanDaya/dashboard_pd', $data);
    }
}