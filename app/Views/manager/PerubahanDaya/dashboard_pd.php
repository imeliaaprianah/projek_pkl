<?= $this->extend('layout/layoutmanager') ?>

<?= $this->section('content') ?>
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-home"></i>
        </span> Dashboard Perubahan Daya
    </h3>
</div>
<div class="row">
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
                <img src="purple-free/src/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Data Perubahan Daya Sudah Survey <i class="mdi mdi-plus-circle-outline mdi-24px float-end"></i>
                </h4>
                <h2 class="mb-5"><?= $datapelanggan_sudah_survei ?></h2>
            </div>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
                <img src="purple-free/src/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Data Perubahan Daya Belum Survey <i class="mdi mdi-flash-outline mdi-24px float-end"></i>
                </h4>
                <h2 class="mb-5"><?= $datapelanggan_belum_survei ?></h2>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>