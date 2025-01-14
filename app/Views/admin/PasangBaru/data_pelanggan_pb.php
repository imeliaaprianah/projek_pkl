<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>

<?php if (session()->getFlashdata('pesan')) : ?>
  <div class="alert alert-success" role="alert">
    <?= session()->getFlashdata('pesan'); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php endif ?>

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Pelanggan Pasang Baru</h4>
      <a href="/data-pelanggan-pb/tambah" class="btn btn-inverse-info mb-3" style="color: black; padding: 10px 15px;">
        Tambah Data
      </a>
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
                <a href="/data-pelanggan-pb/detail/<?= $a['id_data_pelanggan_pb'] ?>" class="btn btn-gradient-info btn-sm"><i class="fa fa-eye"></i> Detail</a>
                <a href="/data-pelanggan-pb/edit/<?= $a['id_data_pelanggan_pb'] ?>" class="btn btn-gradient-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                <a href="/data-pelanggan-pb/delete/<?= $a['id_data_pelanggan_pb'] ?>" class="btn btn-gradient-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus data');"><i class="fa fa-trash"></i> Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </thead>
      </table>
    </div>
  </div>
</div>

<?= $this->endSection() ?>