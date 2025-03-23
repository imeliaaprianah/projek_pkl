<?= $this->extend('layout/layoutkaryawan') ?>

<?= $this->section('content') ?>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data Tindak Lanjut Pasang Baru</h4>
                <form action="<?= site_url('tindak-lanjut-pb-k/update/' . $datpel['id_data_pelanggan_pb']) ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    <!-- Input ID Akun (Hidden) -->
                    <input type="hidden" id="id_data_pelanggan_pb" name="id_data_pelanggan_pb" value="<?= $datpel['id_data_pelanggan_pb']; ?>">

                    <div class="form-group">
                        <label for="tanggal_input">Tanggal Input</label>
                        <input type="text" class="form-control" id="tanggal_input" name="tanggal_input" value="<?= $datpel['tanggal_input']; ?>" placeholder="Tanggal Input" readonly>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_survey">Tanggal Survey</label>
                        <input type="date" class="form-control" id="tanggal_survey" name="tanggal_survey" value="<?= $datpel['tanggal_survey']; ?>" placeholder="Tanggal Survey">
                    </div>

                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?= $datpel['nama_pelanggan']; ?>" placeholder="Nama Pelanggan" readonly>
                    </div>

                    <div class="form-group">
                        <label for="nama_pemohon">Nama Pemohon</label>
                        <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" value="<?= $datpel['nama_pemohon']; ?>" placeholder="Nama Pemohon" readonly>
                    </div>

                    <div class="form-group">
                        <label>Surat Mohon Pasang Baru</label>
                        <input type="text" class="form-control" value="<?= $datpel['surat_mohon_pasang_baru']; ?>" readonly>
                        <small class="text-muted">File saat ini: <?= $datpel['surat_mohon_pasang_baru']; ?></small>
                    </div>

                    <div class="form-group">
                        <label for="no_handphone">No Handphone</label>
                        <input type="text" class="form-control" id="no_handphone" name="no_handphone" value="<?= $datpel['no_handphone']; ?>" placeholder="No Handphone" readonly>
                    </div>

                    <div class="form-group">
                        <label for="ktp">Kartu Tanda Penduduk (KTP)</label>
                        <input type="text" class="form-control" id="ktp" name="ktp" value="<?= $datpel['ktp']; ?>" placeholder="Nomor KTP" readonly>
                    </div>

                    <div class="form-group">
                        <label for="npwp">NPWP</label>
                        <input type="text" class="form-control" id="npwp" name="npwp" value="<?= $datpel['npwp']; ?>" placeholder="Nomor NPWP" readonly>
                    </div>

                    <div class="form-group">
                        <label for="alamat_pasang_baru">Alamat Pasang Baru</label>
                        <textarea class="form-control" id="alamat_pasang_baru" name="alamat_pasang_baru" rows="3" placeholder="Alamat Pasang Baru" readonly><?= $datpel['alamat_pasang_baru']; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label>Dokumen Pasang Baru</label>
                        <input type="file" name="dokumen" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="hasil_survey" class="form-label">Hasil Survey</label>
                        <select id="hasil_survey" name="hasil_survey" class="form-control" required>
                            <option value="">Pilih Hasil Survey</option>
                            <option value="perluasan" <?= (isset($akun['hasil_survey']) && $akun['hasil_survey'] == 'perluasan') ? 'selected' : ''; ?>>Perluasan</option>
                            <option value="non_perluasan" <?= (isset($akun['hasil_survey']) && $akun['hasil_survey'] == 'non_perluasan') ? 'selected' : ''; ?>>Non Perluasan</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="simpan" class="btn btn-inverse-info me-2" style="padding: 10px 15px;">Simpan</button>
                        <a href="<?= base_url('/tindak-lanjut-pb-k') ?>" class="btn btn-secondary" style="padding: 10px 15px;">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>