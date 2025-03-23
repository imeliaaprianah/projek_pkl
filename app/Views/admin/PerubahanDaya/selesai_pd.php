<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Selesai Perubahan Daya Perluasan</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Tanggal Selesai</th>
                        <th> Id Pelanggan </th>
                        <th> Alamat </th>
                        <th> Nama Pelanggan </th>
                        <th> No HP </th>
                        <th> Aksi </th>
                    </tr>
                    <?php $no = 1; ?>
                    <?php foreach ($datapelanggan as $a) : 
                        if ($a['hasil_survey'] == 'perluasan') {

                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $a['tanggal_selesai'] ?></td>
                            <td><?= $a['idpel'] ?></td>
                            <td><?= $a['alamat'] ?></td>
                            <td><?= $a['nama_pelanggan'] ?></td>
                            <td><?= $a['no_handphone'] ?></td>
                            <td>
                                <a href="/selesai-pd/detail/<?= $a['id_data_pelanggan_pd'] ?>" class="btn btn-gradient-info btn-sm"><i class="fa fa-eye"></i> Detail</a>
                            </td>
                        </tr>
                    <?php 
                }
                endforeach; ?>
                </thead>
            </table>
        </div>
            <div class="card-body">
            <h4 class="card-title">Data Selesai Perubahan Daya Non Perluasan</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Tanggal Selesai </th>
                        <th> Id Pelanggan </th>
                        <th> Alamat </th>
                        <th> Nama Pelanggan </th>
                        <th> No HP </th>
                        <th> Aksi </th>
                    </tr>
                    <?php $no = 1; ?>
                    <?php foreach ($datapelanggan as $a) : 
                        if ($a['hasil_survey'] == 'non_perluasan') {

                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $a['tanggal_selesai'] ?></td>
                            <td><?= $a['idpel'] ?></td>
                            <td><?= $a['alamat'] ?></td>
                            <td><?= $a['nama_pelanggan'] ?></td>
                            <td><?= $a['no_handphone'] ?></td>
                            <td>
                                <a href="/selesai-pd/detail/<?= $a['id_data_pelanggan_pd'] ?>" class="btn btn-gradient-info btn-sm"><i class="fa fa-eye"></i> Detail</a>
                            </td>
                        </tr>
                    <?php 
                }
                endforeach; ?>
                </thead>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>