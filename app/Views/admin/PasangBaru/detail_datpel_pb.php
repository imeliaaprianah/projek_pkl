<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Detail Data Pelanggan Pasang Baru</h4>
                <p class="card-description"></p>
                <form>
                    <div class="form-group">
                        <label for="tanggal_input">Tanggal Input</label>
                        <input type="text" class="form-control" id="tanggal_input" name="tanggal_input" value="<?= $data['tanggal_input'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?= $data['nama_pelanggan'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="nama_pemohon">Nama Pemohon</label>
                        <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" value="<?= $data['nama_pemohon'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_pembuatan_surat">Tanggal Pembuatan Surat</label>
                        <input type="text" class="form-control" id="tanggal_pembuatan_surat" name="tanggal_pembuatan_surat" value="<?= $data['tanggal_pembuatan_surat'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Surat Mohon Pasang Baru</label>
                        <div>
                            <a href="<?= base_url('uploads/' . $data['surat_mohon_pasang_baru']) ?>" target="_blank" class="btn btn-info btn-sm">
                                <i class="fa fa-download"></i> Lihat Surat
                            </a>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="no_handphone">No Handphone</label>
                        <input type="text" class="form-control" id="no_handphone" name="no_handphone" value="<?= $data['no_handphone'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="daya_mohon">Daya Mohon</label>
                        <input type="text" class="form-control" id="daya_mohon" name="daya_mohon" value="<?= $data['daya_mohon'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="ktp">KTP</label>
                        <input type="text" class="form-control" id="ktp" name="ktp" value="<?= $data['ktp'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="npwp">NPWP</label>
                        <input type="text" class="form-control" id="npwp" name="npwp" value="<?= $data['npwp'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="titik_koordinat">Titik Koordinat</label>
                        <input type="text" class="form-control" id="titik_koordinat" name="titik_koordinat" value="<?= $data['titik_koordinat'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="alamat_pasang_baru">Alamat Pasang Baru</label>
                        <textarea class="form-control" id="alamat_pasang_baru" name="alamat_pasang_baru" readonly><?= $data['alamat_pasang_baru'] ?></textarea>
                    </div>


                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url('/data-pelanggan-pb') ?>" class="btn btn-secondary" style="padding: 10px 15px;">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>