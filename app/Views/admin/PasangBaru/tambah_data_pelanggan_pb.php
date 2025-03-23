<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Pelanggan Pasang Baru</h4>
                <p class="card-description">Silakan masukkan data pelanggan dengan lengkap.</p>
                <form action="<?= site_url('simpan-data-pb') ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    <div class="form-group">
                        <label for="tanggal_input">Tanggal Input</label>
                        <input type="date" class="form-control" id="tanggal_input" name="tanggal_input" required>
                    </div>

                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
                    </div>

                    <div class="form-group">
                        <label for="nama_pemohon">Nama Pemohon</label>
                        <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" required>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_pembuatan_surat">Tanggal Pembuatan Surat</label>
                        <input type="date" class="form-control" id="tanggal_pembuatan_surat" name="tanggal_pembuatan_surat" required>
                    </div>

                    <div class="form-group">
                        <label>Surat Mohon Pasang Baru</label>
                        <input type="file" name="surat_mohon_pasang_baru" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="no_handphone">No Handphone</label>
                        <input type="text" class="form-control" id="no_handphone" name="no_handphone" required>
                    </div>

                    <div class="form-group">
                        <label for="daya_mohon">Daya Mohon</label>
                        <input type="text" class="form-control" id="daya_mohon" name="daya_mohon" required>
                    </div>

                    <div class="form-group">
                        <label for="ktp">KTP</label>
                        <input type="text" class="form-control" id="ktp" name="ktp" required>
                    </div>

                    <div class="form-group">
                        <label for="npwp">NPWP</label>
                        <input type="text" class="form-control" id="npwp" name="npwp" required>
                    </div>

                    <div class="form-group">
                        <label for="titik_koordinat">Titik Koordinat</label>
                        <input type="text" class="form-control" id="titik_koordinat" name="titik_koordinat" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat_pasang_baru">Alamat Pasang Baru</label>
                        <textarea class="form-control" id="alamat_pasang_baru" name="alamat_pasang_baru" required></textarea>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="simpan" class="btn btn-inverse-info me-2" style="padding: 10px 15px;">Simpan</button>
                        <a href="<?= base_url('/data-pelanggan-pb') ?>" class="btn btn-secondary" style="padding: 10px 15px;">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>