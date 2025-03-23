<?= $this->extend('layout/layoutmanager') ?>

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
            <h4 class="card-title">Tindak Lanjut Perubahan Daya</h4>

            <!-- Form Input Tanggal -->
            <form method="POST" action="/filter-tindak-lanjut-pd-m">
                <div class="row">
                    <div class="col-md-5">
                        <label for="tanggal_dari">Tanggal Dari</label>
                        <input type="date" class="form-control" name="tanggal_dari" value="<?= isset($_GET['tanggal_dari']) ? $_GET['tanggal_dari'] : '' ?>">
                    </div>
                    <div class="col-md-5">
                        <label for="tanggal_sampai">Tanggal Sampai</label>
                        <input type="date" class="form-control" name="tanggal_sampai" value="<?= isset($_GET['tanggal_sampai']) ? $_GET['tanggal_sampai'] : '' ?>">
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <label>&nbsp;</label>
                        <button type="submit" class="btn btn-gradient-info btn-block">Filter</button>
                    </div>
                </div>
            </form>
            <br>
            <!-- End Form Input Tanggal -->

            <!-- Tabel dengan Scroll -->
            <div style="max-height: 400px; overflow-y: auto; overflow-x: auto;">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th> No </th>
                            <th> Tanggal Input </th>
                            <th> Id Pelanggan </th>
                            <th> Alamat </th>
                            <th> Nama Pelanggan </th>
                            <th> Status Approved</th>
                            <th> Status </th>
                            <th> Aksi </th>
                        </tr>
                        <?php $no = 1; ?>
                        <?php foreach ($datapelanggan as $a) :
                            if ($a['status_approved'] != 'sudah_sesuai') {
                        ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $a['tanggal_input'] ?></td>
                                    <td><?= $a['idpel'] ?></td>
                                    <td><?= $a['alamat'] ?></td>
                                    <td><?= $a['nama_pelanggan'] ?></td>
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
                                        } elseif ($a['status_approved'] == '') {
                                            echo  'Menunggu Petugas Survey';
                                        } ?></td>
                                    <td>
                                        <a href="/tindak-lanjut-pd-m/detail/<?= $a['id_data_pelanggan_pd'] ?>" class="btn btn-gradient-info btn-sm"><i class="fa fa-eye"></i> Detail</a>
                                        <a href="/tindak-lanjut-pd-m/edit/<?= $a['id_data_pelanggan_pd'] ?>" class="btn btn-gradient-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>                                        
                                    </td>
                                </tr>
                        <?php
                            }
                        endforeach; ?>
                    </thead>
                </table>
            </div>
            <!-- End Tabel dengan Scroll -->
        </div>
    </div>
</div>

<?= $this->endSection() ?>