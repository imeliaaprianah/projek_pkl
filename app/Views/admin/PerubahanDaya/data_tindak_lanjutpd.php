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
                    <p class="card-description"></p>
                    <form class="forms-sample">

                        <div class="form-group">
                            <label for="idPelanggan">Id Pelanggan</label>
                            <input type="text" class="form-control" id="idPelanggan" name="id_pelanggan" placeholder="Masukkan ID Pelanggan" required>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" required>
                        </div>

                        <div class="form-group">
                            <label for="namaPelanggan">Nama Pelanggan</label>
                            <input type="text" class="form-control" id="namaPelanggan" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" required>
                        </div>

                        <div class="form-group">
                            <label>Surat Mohon Perubahan Daya</label>
                            <input type="file" name="surat_perubahan_daya" class="file-upload-default" required>
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Unggah Surat Perubahan Daya">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-info py-3" type="button">Unggah</button>
                                </span>
                            </div>
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

                        <div class="form-group">
                            <label>Dokumen</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-info py-3" type="button">Upload</button>
                                </span>
                            </div>
                        </div>

                        <a href="/tindak-lanjut-pd" class="btn btn-inverse-info me-2" style="padding: 10px 15px;">Simpan</a>
                        <a href="/tindak-lanjut-pd" class="btn btn-light" style="padding: 10px 15px;">Kembali</a>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>