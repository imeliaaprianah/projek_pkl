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
                            <label for="tanggal_input">Tanggal Input</label>
                            <input type="date" class="form-control" id="tanggal_input" name="tanggal_input" placeholder="Masukkan Tanggal Input" required>
                        </div>

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
                            <label for="tanggal_pembuatan_surat">Tanggal Pembuatan Surat</label>
                            <input type="date" class="form-control" id="tanggal_pembuatan_surat" name="tanggal_pembuatan_surat" placeholder="Masukkan Tanggal Pembuatan Surat" required>
                        </div>

                        <div class="form-group">
                            <label>Surat Mohon Perubahan Daya</label>
                            <input type="file" name="surat_mohon_perubahan_daya" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="daya_awal">Daya Awal</label>
                            <input type="text" class="form-control" id="daya_awal" name="daya_awal" placeholder="Masukkan Daya Awal" required>
                        </div>

                        <div class="form-group">
                            <label for="daya_akhir">Daya Akhir</label>
                            <input type="text" class="form-control" id="daya_akhir" name="daya_akhir" placeholder="Masukkan Daya Akhir" required>
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