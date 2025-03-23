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
      <h4 class="card-title">Data Pelanggan Pasang Baru</h4>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th> No </th>
            <th> Nama Pelanggan </th>
            <th> Nama Pemohon </th>
            <th> No HP </th>
            <th> Alamat Pasang Baru </th>
            <th> Aksi </th>
          </tr>
          <?php $no = 1; ?>
          <?php foreach ($datapelanggan as $a) : ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $a['nama_pelanggan'] ?></td>
              <td><?= $a['nama_pemohon'] ?></td>
              <td><?= $a['no_handphone'] ?></td>
              <td><?= $a['alamat_pasang_baru'] ?></td>
              <td>
                <a href="/data-pelanggan-pb-k/detail/<?= $a['id_data_pelanggan_pb'] ?>" class="btn btn-gradient-info btn-sm"><i class="fa fa-eye"></i> Detail</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </thead>
      </table>
    </div>
  </div>
</div>

<?= $this->endSection() ?>