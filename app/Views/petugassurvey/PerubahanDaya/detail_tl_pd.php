<?= $this->extend('layout/layoutkaryawan') ?>

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
                        <label for="tanggal_input">Tanggal Input</label>
                        <input type="text" class="form-control" id="tanggal_input" name="tanggal_input" value="<?= $data['tanggal_input']; ?>" placeholder="Tanggal Input" readonly>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_survey">Tanggal Survey</label>
                        <input type="date" class="form-control" id="tanggal_survey" name="tanggal_survey" value="<?= $data['tanggal_survey']; ?>" placeholder="Tanggal Survey" readonly>
                    </div>

                    <div class="form-group">
                        <label for="idpel">ID pelanggan</label>
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
                        <label for="tanggal_pembuatan_surat">Tanggal Pembuatan Surat</label>
                        <input type="text" class="form-control" id="tanggal_pembuatan_surat" name="tanggal_pembuatan_surat" value="<?= $data['tanggal_pembuatan_surat']; ?>" readonly required>
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
                        <label for="daya_awal">Daya Awal</label>
                        <input type="text" class="form-control" id="daya_awal" name="daya_awal" value="<?= $data['daya_awal']; ?>" placeholder="Daya Awal" readonly>
                    </div>

                    <div class="form-group">
                        <label for="daya_akhir">Daya Akhir</label>
                        <input type="text" class="form-control" id="daya_akhir" name="daya_akhir" value="<?= $data['daya_akhir']; ?>" placeholder="Daya Akhir" readonly>
                    </div>

                    <div class="form-group">
                        <label for="no_handphone">No Handphone</label>
                        <input type="text" class="form-control" id="no_handphone" name="no_handphone" value="<?= $data['no_handphone'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="ktp">Kartu Tanda Penduduk (KTP)</label>
                        <input type="text" class="form-control" id="ktp" name="ktp" value="<?= $data['ktp'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="npwp">Nomor Pokok Wajib Pajak (NPWP)</label>
                        <input type="text" class="form-control" id="npwp" name="npwp" value="<?= $data['npwp'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Dokumen Perubahan Daya</label>
                        <div>
                            <a href="<?= base_url('uploads/' . $data['dokumen_pd']) ?>" target="_blank" class="btn btn-info btn-sm">
                                <i class="fa fa-download"></i> Lihat Surat
                            </a>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="hasil_survey">Hasil Survey</label>
                        <input type="text" class="form-control" id="hasil_survey" name="hasil_survey" value="<?= $data['hasil_survey'] ?>" readonly>
                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url('/tindak-lanjut-pd-k') ?>" class="btn btn-secondary" style="padding: 10px 15px;">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>