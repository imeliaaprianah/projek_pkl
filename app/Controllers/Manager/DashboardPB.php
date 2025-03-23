<?php

namespace App\Controllers\Manager;

use App\Controllers\BaseController;
use App\Models\MDataPelPB;


class Dashboardpb extends BaseController
{
    protected $datpel;

    public function __construct()
    {
        $this->datpel = new MDataPelPB();
    }
    public function index()
    {
        $data = [
            "datapelanggan_sudah_survei" => $this->datpel->where('dokumen_pb !=', null)->countAllResults(),
            "datapelanggan_belum_survei" => $this->datpel->where('dokumen_pb', null)->countAllResults(),
        ];
        return view('manager/PasangBaru/dashboard_pb', $data);
    }
}
