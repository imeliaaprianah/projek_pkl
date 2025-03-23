<?= $this->extend('layout/layoutadmin') ?>

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
            <h4 class="card-title">Tindak Lanjut Pasang Baru</h4>
            <div class="table-responsive"> <!-- Tambahkan div ini untuk fitur geser -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th> No </th>
                            <th> Tanggal Input </th>
                            <th> Nama Pelanggan </th>
                            <th> Nama Pemohon </th>
                            <th> Alamat Pasang Baru </th>
                            <th> Status Approved</th>
                            <th> Status</th>
                            <th> Aksi </th>
                        </tr>
                        <?php $no = 1; ?>
                        <?php foreach ($datapelanggan as $a) :
                            if ($a['status_approved'] != 'sudah_sesuai') {
                        ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $a['tanggal_input'] ?></td>
                                    <td><?= $a['nama_pelanggan'] ?></td>
                                    <td><?= $a['nama_pemohon'] ?></td>
                                    <td><?= $a['alamat_pasang_baru'] ?></td>
                                    <td>
                                        <?php if ($a['status_approved'] == 'pending'): ?>
                                            <span class="badge bg-warning text-dark"><?= $a['status_approved'] ?></span>
                                        <?php elseif ($a['status_approved'] == 'belum_sesuai'): ?>
                                            <span class="badge bg-danger"><?= $a['status_approved'] ?></span>
                                        <?php elseif ($a['status_approved'] == 'sudah_sesuai'): ?>
                                            <span class="badge bg-success"><?= $a['status_approved'] ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php
                                        if ($a['status_approved'] == 'pending' || $a['status_approved'] == 'belum_sesuai') {
                                            echo 'Menunggu Approve Manager';
                                        } elseif (empty($a['status_approved'])) {
                                            echo  'Menunggu Petugas Survey';
                                        } ?></td>
                                    <td>
                                        <a href="/tindak-lanjut-pb/detail/<?= $a['id_data_pelanggan_pb'] ?>" class="btn btn-gradient-info btn-sm"><i class="fa fa-eye"></i> Detail</a>
                                        <a href="/tindak-lanjut-pb/edit/<?= $a['id_data_pelanggan_pb'] ?>" class="btn btn-gradient-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="/tindak-lanjut-pb/delete/<?= $a['id_data_pelanggan_pb'] ?>" class="btn btn-gradient-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus data');"><i class="fa fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                        <?php
                            }
                        endforeach; ?>
                    </thead>
                </table>
            </div> <!-- Tutup div .table-responsive -->
        </div>
    </div>
</div>

<?= $this->endSection() ?>