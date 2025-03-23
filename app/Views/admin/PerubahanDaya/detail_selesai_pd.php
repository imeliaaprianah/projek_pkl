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
                        <label for="tanggal_input">Tanggal Input</label>
                        <input type="text" class="form-control" id="tanggal_input" name="tanggal_input" value="<?= $data['tanggal_input']; ?>" placeholder="Tanggal Input" readonly>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_survey">Tanggal Survey</label>
                        <input type="date" class="form-control" id="tanggal_survey" name="tanggal_survey" value="<?= $data['tanggal_survey']; ?>" placeholder="Tanggal Survey" readonly>
                    </div>

                    <div class="form-group">
                        <label for="idpel">Idpel</label>
                        <input type="text" class="form-control" id="idpel" name="idpel" value="<?= $data['idpel']; ?>" placeholder="Idpel" readonly>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat" readonly><?= $data['alamat']; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?= $data['nama_pelanggan']; ?>" placeholder="Nama Pelanggan" readonly>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_pembuatan_surat">Tanggal Pembuatan Surat</label>
                        <input type="date" class="form-control" id="tanggal_pembuatan_surat" name="tanggal_pembuatan_surat" value="<?= $data['tanggal_pembuatan_surat']; ?>" readonly required>
                    </div>

                    <div class="form-group">
                        <label>Surat Mohon Perubahan Daya</label>
                        <input type="text" class="form-control" value="<?= $data['surat_mohon_perubahan_daya']; ?>" readonly>
                        <small class="text-muted">File saat ini: <?= $data['surat_mohon_perubahan_daya']; ?></small>
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
                        <input type="text" class="form-control" id="no_handphone" name="no_handphone" value="<?= $data['no_handphone']; ?>" placeholder="No Handphone" readonly>
                    </div>

                    <div class="form-group">
                        <label for="ktp">Kartu Tanda Penduduk (KTP)</label>
                        <input type="text" class="form-control" id="ktp" name="ktp" value="<?= $data['ktp']; ?>" placeholder="Nomor KTP" readonly>
                    </div>

                    <div class="form-group">
                        <label for="npwp">NPWP</label>
                        <input type="text" class="form-control" id="npwp" name="npwp" value="<?= $data['npwp']; ?>" placeholder="Nomor NPWP" readonly>
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

                    <div class="form-group">
                        <label for="status_approved">Status Approved</label>
                        <input type="text"
                            class="form-control"
                            id="status_approved"
                            name="status_approved"
                            value="<?= isset($data['status_approved']) ? $data['status_approved'] : 'pending'; ?>"
                            readonly>
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