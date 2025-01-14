<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Pelanggan Pasang Baru</h4>
                    <p class="card-description"></p>
                    <form class="forms-sample">

                        <div class="form-group">
                            <label for="exampleInputName1">Nama Pelanggan</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama Pelanggan">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail3">Nama Pemohon</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Nama Pemohon">
                        </div>

                        <div class="form-group">
                            <label>Surat Mohon Pasang baru</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-primary py-3" type="button">Upload</button>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword4">No Handphone</label>
                            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="No Handphone">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword4">Kartu Tanda Pemilik (KTP)</label>
                            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Kartu Tanda Pemilik (KTP)">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword4">NPWP</label>
                            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="NPWP">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputCity1">Alamat Pasang Baru</label>
                            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Alamat Pasang Baru">
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

                        <a href="/tindak-lanjut-pb" class="btn btn-inverse-info me-2" style="padding: 10px 15px;">Simpan</a>
                        <a href="/tindak-lanjut-pb" class="btn btn-light" style="padding: 10px 15px;">Kembali</a>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>