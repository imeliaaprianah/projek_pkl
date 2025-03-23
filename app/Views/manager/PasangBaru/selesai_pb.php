<?= $this->extend('layout/layoutmanager') ?>

<?= $this->section('content') ?>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            
            <!-- Filter berdasarkan tanggal -->
            <form method="POST" action="/filter-selesai-pb-m">
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
            <?php if (isset($filter)) { ?>
                <form method="GET" action="/export/<?= $tanggal_dari . '/' . $tanggal_sampai ?>">
                    <div class="col-md-2">
                        <label>&nbsp;</label>
                        <button type="submit" class="btn btn-gradient-info btn-block">Export Excel</button>
                    </div>
                </form>
            <?php } ?>
            <br>

            <h4 class="card-title">Data Selesai Pasang Baru Perluasan</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Tanggal Selesai</th>
                        <th> Nama Pelanggan </th>
                        <th> Nama Pemohon </th>
                        <th> Alamat Pasang Baru </th>
                        <th> Aksi </th>
                    </tr>
                    <?php $no = 1; ?>
                    <?php foreach ($datapelanggan as $a) :
                        if ($a['hasil_survey'] == 'perluasan') {
                    ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $a['tanggal_selesai'] ?></td>
                                <td><?= $a['nama_pelanggan'] ?></td>
                                <td><?= $a['nama_pemohon'] ?></td>
                                <td><?= $a['alamat_pasang_baru'] ?></td>
                                <td>
                                    <a href="/selesai-pb-m/detail/<?= $a['id_data_pelanggan_pb'] ?>" class="btn btn-gradient-info btn-sm"><i class="fa fa-eye"></i> Detail</a>
                                </td>
                            </tr>
                    <?php
                        }
                    endforeach; ?>
                </thead>
            </table>
        </div>
        <div class="card-body">
            <h4 class="card-title">Data Selesai Pasang Baru Non Perluasan</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Tanggal Selesai </th>
                        <th> Nama Pelanggan </th>
                        <th> Nama Pemohon </th>
                        <th> Alamat Pasang Baru </th>
                        <th> Aksi </th>
                    </tr>
                    <?php $no = 1; ?>
                    <?php foreach ($datapelanggan as $a) :
                        if ($a['hasil_survey'] == 'non_perluasan') {

                    ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $a['tanggal_selesai'] ?></td>
                                <td><?= $a['nama_pelanggan'] ?></td>
                                <td><?= $a['nama_pemohon'] ?></td>
                                <td><?= $a['alamat_pasang_baru'] ?></td>
                                <td>
                                    <a href="/selesai-pb-k/detail/<?= $a['id_data_pelanggan_pb'] ?>" class="btn btn-gradient-info btn-sm"><i class="fa fa-eye"></i> Detail</a>
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