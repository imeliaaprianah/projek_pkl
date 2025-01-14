<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data Tindak Lanjut Perubahan Daya</h4>
                <form action="<?= site_url('tindak-lanjut-pd/update/' . $datpel['id_data_pelanggan_pd']) ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    <!-- Input ID Akun (Hidden) -->
                    <input type="hidden" id="id_data_pelanggan_pd" name="id_data_pelanggan_pd" value="<?= $datpel['id_data_pelanggan_pd']; ?>">

                
                    <div class="form-group">
                        <label for="idpel">Idpel</label>
                        <input type="text" class="form-control" id="idpel" name="idpel" value="<?= $datpel['idpel']; ?>" placeholder="Idpel" readonly>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat" readonly><?= $datpel['alamat']; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?= $datpel['nama_pelanggan']; ?>" placeholder="Nama Pelanggan" readonly>
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
                        <label>Surat Mohon Perubahan Daya</label>
                        <input type="text" class="form-control" value="<?= $datpel['surat_mohon_perubahan_daya']; ?>" readonly>
                        <small class="text-muted">File saat ini: <?= $datpel['surat_mohon_perubahan_daya']; ?></small>
                    </div>    

                    <div class="form-group">
                        <label>Dokumen Perubahan Daya</label>
                        <input type="file" name="dokumen" class="form-control">
                        <div>
                            <a href="<?= base_url('uploads/' . $datpel['dokumen_pd']) ?>" target="_blank" class="btn btn-info btn-sm">
                                <i class="fa fa-download"></i> Lihat Surat
                            </a>
                        </div>
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
                        <a href="<?= base_url('/tindak-lanjut-pd') ?>" class="btn btn-secondary" style="padding: 10px 15px;">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>