<?= $this->extend('layout/layoutkaryawan') ?>

<?= $this->section('content') ?>
<div class="page-header">
  <h3 class="page-title">
    <span class="page-title-icon bg-gradient-primary text-white me-2">
      <i class="mdi mdi-home"></i>
    </span> Dashboard
  </h3>
</div>
<div class="row">
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card bg-gradient-danger card-img-holder text-white">
      <div class="card-body">
        <img src="purple-free/src/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
        <h4 class="font-weight-normal mb-3">Data Pasang Baru <i class="mdi mdi-plus-circle-outline mdi-24px float-end"></i>
        </h4>
        <h2 class="mb-5"><?= $total_pb ?></h2>
        <!-- <h6 class="card-text">Increased by 60%</h6> -->
      </div>
    </div>
  </div>
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card bg-gradient-info card-img-holder text-white">
      <div class="card-body">
        <img src="purple-free/src/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
        <h4 class="font-weight-normal mb-3">Data Perubahan Daya <i class="mdi mdi-flash-outline mdi-24px float-end"></i>
        </h4>
        <h2 class="mb-5"><?= $total_pd ?></h2>
        <!-- <h6 class="card-text">Decreased by 10%</h6> -->
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>