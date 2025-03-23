<?= $this->extend('layout/layoutmanager') ?>

<?= $this->section('content') ?>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
                        
            <!-- Filter berdasarkan tanggal -->
            <form method="POST" action="/filter-selesai-pd-m">
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
                <form method="GET" action="/exportPD/<?= $tanggal_dari . '/' . $tanggal_sampai ?>">
                    <div class="col-md-2">
                        <label>&nbsp;</label>
                        <button type="submit" class="btn btn-gradient-info btn-block">Export Excel</button>
                    </div>
                </form>
            <?php } ?>
            <br>
            
            <h4 class="card-title">Data Selesai Perubahan Daya Perluasan</h4>
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
                                <a href="/selesai-pd-m/detail/<?= $a['id_data_pelanggan_pd'] ?>" class="btn btn-gradient-info btn-sm"><i class="fa fa-eye"></i> Detail</a>
                            </td>
                        </tr>
                    <?php 
                }
                endforeach; ?>
                </thead>
            </table>
        </div>
        <div class="card-body">
        <h4 class="card-title">Data Selesai Perubahan Daya Perluasan</h4>
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
                                <a href="/selesai-pd-m/detail/<?= $a['id_data_pelanggan_pd'] ?>" class="btn btn-gradient-info btn-sm"><i class="fa fa-eye"></i> Detail</a>
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