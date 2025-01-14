<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data Pelanggan Pasang Baru</h4>
                <form action="<?= site_url('data-pelanggan-pb/update/' . $datpel['id_data_pelanggan_pb']) ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    <!-- Input ID Akun (Hidden) -->
                    <input type="hidden" id="id_data_pelanggan_pb" name="id_data_pelanggan_pb" value="<?= $datpel['id_data_pelanggan_pb']; ?>">

                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?= $datpel['nama_pelanggan']; ?>" placeholder="Nama Pelanggan" required>
                    </div>

                    <div class="form-group">
                        <label for="nama_pemohon">Nama Pemohon</label>
                        <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" value="<?= $datpel['nama_pemohon']; ?>" placeholder="Nama Pemohon" required>
                    </div>

                    <div class="form-group">
                        <label>Surat Mohon Pasang Baru (Unggah ulang jika ingin mengganti)</label>
                        <input type="file" name="surat_mohon_pasang_baru" class="form-control">
                        <small class="text-muted">File saat ini: <?= $datpel['surat_mohon_pasang_baru']; ?></small>
                    </div>

                    <div class="form-group">
                        <label for="no_handphone">No Handphone</label>
                        <input type="text" class="form-control" id="no_handphone" name="no_handphone" value="<?= $datpel['no_handphone']; ?>" placeholder="No Handphone" required>
                    </div>

                    <div class="form-group">
                        <label for="ktp">Kartu Tanda Penduduk (KTP)</label>
                        <input type="text" class="form-control" id="ktp" name="ktp" value="<?= $datpel['ktp']; ?>" placeholder="Nomor KTP" required>
                    </div>

                    <div class="form-group">
                        <label for="npwp">NPWP</label>
                        <input type="text" class="form-control" id="npwp" name="npwp" value="<?= $datpel['npwp']; ?>" placeholder="Nomor NPWP" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat_pasang_baru">Alamat Pasang Baru</label>
                        <textarea class="form-control" id="alamat_pasang_baru" name="alamat_pasang_baru" rows="3" placeholder="Alamat Pasang Baru" required><?= $datpel['alamat_pasang_baru']; ?></textarea>
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