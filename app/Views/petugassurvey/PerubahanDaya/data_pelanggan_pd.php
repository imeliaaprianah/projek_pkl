<?= $this->extend('layout/layoutkaryawan') ?>

<?= $this->section('content') ?>

<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <script>
        setTimeout(function() {
            $('.alert').fadeOut('slow');
        }, 3000); // Hilang setelah 3 detik
    </script>
<?php endif ?>

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Pelanggan Perubahan Daya</h4>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th> No </th>
            <th> ID Pelanggan </th>
            <th> Alamat </th>
            <th> Nama Pelanggan </th>
            <th> No HP </th>
            <th> Aksi </th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($DataPelanggan as $a) : ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $a['idpel'] ?></td>
              <td><?= $a['alamat'] ?></td>
              <td><?= $a['nama_pelanggan'] ?></td>
              <td><?= $a['no_handphone'] ?></td>
              <td>
                <a href="/data-pelanggan-pd-k/detail/<?= $a['id_data_pelanggan_pd'] ?>" class="btn btn-gradient-info btn-sm"><i class="fa fa-eye"></i> Detail</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?= $this->endSection() ?>