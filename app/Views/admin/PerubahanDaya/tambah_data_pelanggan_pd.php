<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Pelanggan Perubahan Daya</h4>
                    <p class="card-description">Silakan masukkan data pelanggan dengan lengkap.</p>
                    <form action="<?= site_url('simpan-data-pd') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <label for="idpel">Id Pelanggan</label>
                            <input type="text" class="form-control" id="idpel" name="idpel" placeholder="Masukkan ID Pelanggan" required>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" required>
                        </div>

                        <div class="form-group">
                            <label for="nama_pelanggan">Nama Pelanggan</label>
                            <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" required>
                        </div>

                        <div class="form-group">
                            <label>Surat Mohon Perubahan Daya</label>
                            <input type="file" name="surat_mohon_perubahan_daya" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="no_handphone">No Handphone</label>
                            <input type="text" class="form-control" id="no_handphone" name="no_handphone" placeholder="Masukkan No Handphone" required>
                        </div>

                        <div class="form-group">
                            <label for="ktp">Kartu Tanda Penduduk (KTP)</label>
                            <input type="text" class="form-control" id="ktp" name="ktp" placeholder="Masukkan Nomor KTP" required>
                        </div>

                        <div class="form-group">
                            <label for="npwp">NPWP</label>
                            <input type="text" class="form-control" id="npwp" name="npwp" placeholder="Masukkan Nomor NPWP" required>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="simpan" class="btn btn-inverse-info me-2" style="padding: 10px 15px;">Simpan</button>
                            <a href="<?= base_url('/data-pelanggan-pd') ?>" class="btn btn-secondary" style="padding: 10px 15px;">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>