<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data Pelanggan Perubahan Daya</h4>
                <form action="<?= site_url('data-pelanggan-pd/update/' . $DatPel['id_data_pelanggan_pd']) ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    <!-- Input ID Akun (Hidden) -->
                    <input type="hidden" id="id_data_pelanggan_pd" name="id_data_pelanggan_pd" value="<?= $DatPel['id_data_pelanggan_pd']; ?>">

                    <div class="form-group">
                        <label for="tanggal_input">Tanggal Input</label>
                        <input type="date" class="form-control" id="tanggal_input" name="tanggal_input" value="<?= $DatPel['tanggal_input']; ?>" placeholder="Tanggal Input" required>
                    </div>

                    <div class="form-group">
                        <label for="idpel">Id Pelanggan</label>
                        <input type="text" class="form-control" id="idpel" name="idpel" value="<?= $DatPel['idpel']; ?>" placeholder="Nama Pelanggan" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $DatPel['alamat']; ?>" placeholder="Nama Pemohon" required>
                    </div>

                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?= $DatPel['nama_pelanggan']; ?>" placeholder="Nama Pemohon" required>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_pembuatan_surat">Tanggal Pembuatan Surat </label>
                        <input type="date" class="form-control" id="tanggal_pembuatan_surat" name="tanggal_pembuatan_surat" value="<?= $DatPel['tanggal_pembuatan_surat']; ?>" placeholder="Tanggal Pembbuatan Surat" required>
                    </div>

                    <div class="form-group">
                        <label>Surat Mohon Perubahan Daya (Unggah ulang jika ingin mengganti)</label>
                        <input type="file" name="surat_mohon_perubahan_daya" class="form-control">
                        <small class="text-muted">File saat ini: <?= $DatPel['surat_mohon_perubahan_daya']; ?></small>
                    </div>

                    <div class="form-group">
                        <label for="daya_awal">Daya Awal</label>
                        <input type="text" class="form-control" id="daya_awal" name="daya_awal" value="<?= $DatPel['daya_awal']; ?>" placeholder="Daya Awal" required>
                    </div>

                    <div class="form-group">
                        <label for="daya_akhir">Daya Akhir</label>
                        <input type="text" class="form-control" id="daya_akhir" name="daya_akhir" value="<?= $DatPel['daya_akhir']; ?>" placeholder="Daya Akhir" required>
                    </div>

                    <div class="form-group">
                        <label for="no_handphone">No Handphone</label>
                        <input type="text" class="form-control" id="no_handphone" name="no_handphone" value="<?= $DatPel['no_handphone']; ?>" placeholder="No Handphone" required>
                    </div>

                    <div class="form-group">
                        <label for="ktp">Kartu Tanda Penduduk (KTP)</label>
                        <input type="text" class="form-control" id="ktp" name="ktp" value="<?= $DatPel['ktp']; ?>" placeholder="Nomor KTP" required>
                    </div>

                    <div class="form-group">
                        <label for="npwp">NPWP</label>
                        <input type="text" class="form-control" id="npwp" name="npwp" value="<?= $DatPel['npwp']; ?>" placeholder="Nomor NPWP" required>
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

<?= $this->endSection() ?>