<?= $this->extend('layout/layoutmanager') ?>

<?= $this->section('content') ?>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data Tindak Lanjut Pasang Baru</h4>
                <form action="<?= site_url('tindak-lanjut-pb-m/update/' . $datpel['id_data_pelanggan_pb']) ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    <!-- Input ID Akun (Hidden) -->
                    <input type="hidden" id="id_data_pelanggan_pb" name="id_data_pelanggan_pb" value="<?= $datpel['id_data_pelanggan_pb']; ?>">

                    <div class="form-group">
                        <label for="tanggal_input">Tanggal Input</label>
                        <input type="text" class="form-control" id="tanggal_input" name="tanggal_input" value="<?= $datpel['tanggal_input']; ?>" placeholder="Tanggal Input" readonly>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_survey">Tanggal Survey</label>
                        <input type="text" class="form-control" id="tanggal_survey" name="tanggal_survey" value="<?= $datpel['tanggal_survey'] ?>" readonly>
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
                        <label for="tanggal_pembuatan_surat">Tanggal Pembuatan Surat</label>
                        <input type="date" class="form-control" id="tanggal_pembuatan_surat" name="tanggal_pembuatan_surat" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label>Surat Mohon Pasang Baru</label>
                        <div>
                            <a href="<?= base_url('uploads/' . $datpel['surat_mohon_pasang_baru']) ?>" target="_blank" class="btn btn-info btn-sm">
                                <i class="fa fa-download"></i> Lihat Surat
                            </a>
                        </div>
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
                        <div>
                            <a href="<?= base_url('uploads/' . $datpel['surat_mohon_pasang_baru']) ?>" target="_blank" class="btn btn-info btn-sm">
                                <i class="fa fa-download"></i> Lihat Surat
                            </a>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="hasil_survey">Hasil Survey</label>
                        <input type="text" class="form-control" id="hasil_survey" name="hasil_survey" value="<?= $datpel['hasil_survey'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="status_approved">Status Approved</label>
                        <select class="form-control" id="status_approved" name="status_approved">
                            <option value="pending" <?= !isset($datpel['status_approved']) || $datpel['status_approved'] == 'pending' ? 'selected' : ''; ?>>Pending</option>
                            <option value="sudah_sesuai" <?= isset($datpel['status_approved']) && $datpel['status_approved'] == 'sudah_sesuai' ? 'selected' : ''; ?>>Sudah Sesuai</option>
                            <option value="belum_sesuai" <?= isset($datpel['status_approved']) && $datpel['status_approved'] == 'belum_sesuai' ? 'selected' : ''; ?>>Belum Sesuai</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="simpan" class="btn btn-inverse-info me-2" style="padding: 10px 15px;">Simpan</button>
                        <a href="<?= base_url('/tindak-lanjut-pb-m') ?>" class="btn btn-secondary" style="padding: 10px 15px;">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>