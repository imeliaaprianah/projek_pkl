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
            <h4 class="card-title">Tindak Lanjut Pasang Baru</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Nama Pelanggan </th>
                        <th> Nama Pemohon </th>
                        <th> Alamat Pasang Baru </th>
                        <th> Status Approved</th>
                        <th> Aksi </th>
                    </tr>
                    <?php $no = 1; ?>
                    <?php foreach ($datapelanggan as $a) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $a['nama_pelanggan'] ?></td>
                            <td><?= $a['nama_pemohon'] ?></td>
                            <td><?= $a['alamat_pasang_baru'] ?></td>
                            <td><?= $a['status_approved'] ?></td>
                            <td>
                                <a href="/tindak-lanjut-pb/detail/<?= $a['id_data_pelanggan_pb'] ?>" class="btn btn-gradient-info btn-sm"><i class="fa fa-eye"></i> Detail</a>
                                <a href="/tindak-lanjut-pb/edit/<?= $a['id_data_pelanggan_pb'] ?>" class="btn btn-gradient-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                <a href="/tindak-lanjut-pb/delete/<?= $a['id_data_pelanggan_pb'] ?>" class="btn btn-gradient-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus data');"><i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </thead>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>