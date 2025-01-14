<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Detail Data Pelanggan Perubahan Daya</h4>
                <p class="card-description"></p>
                <form>
                    <div class="form-group">
                        <label for="idpel">Id Pelanggan</label>
                        <input type="text" class="form-control" id="idpel" name="idpel" value="<?= $data['idpel'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data['alamat'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?= $data['nama_pelanggan'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Surat Mohon Perubahan Daya</label>
                        <div>
                            <a href="<?= base_url('uploads/' . $data['surat_mohon_perubahan_daya']) ?>" target="_blank" class="btn btn-info btn-sm">
                                <i class="fa fa-download"></i> Lihat Surat
                            </a>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="no_handphone">No Handphone</label>
                        <input type="text" class="form-control" id="no_handphone" name="no_handphone" value="<?= $data['no_handphone'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="ktp">KTP</label>
                        <input type="text" class="form-control" id="ktp" name="ktp" value="<?= $data['ktp'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="npwp">NPWP</label>
                        <input type="text" class="form-control" id="npwp" name="npwp" value="<?= $data['npwp'] ?>" readonly>
                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url('/data-pelanggan-pd') ?>" class="btn btn-secondary" style="padding: 10px 15px;">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>