<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-center align-items-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Tambah Pengguna</h4>
                <form action="<?= site_url('simpan-pengguna') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= old('username') ?>" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="level">Level</label>
                        <select class="form-control" id="level" name="level">
                            <option value="" disabled selected>Pilih Level</option>
                            <option value="admin" <?= old('level') == 'admin' ? 'selected' : '' ?>>Admin</option>
                            <option value="manager" <?= old('level') == 'manager' ? 'selected' : '' ?>>Manager</option>
                            <option value="karyawan" <?= old('level') == 'karyawan' ? 'selected' : '' ?>>Karyawan</option>
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="simpan" class="btn btn-inverse-info" style="padding: 10px 15px;">Simpan</button>
                        <a href="<?= base_url('/pengguna') ?>" class="btn btn-secondary" style="padding: 10px 15px;">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>