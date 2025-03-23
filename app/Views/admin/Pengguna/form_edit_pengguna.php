<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-center align-items-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">                
            <h4 class="card-title text-center">Edit Pengguna</h4>
            <form action="<?= site_url('update-pengguna') ?>" method="post">
                <?= csrf_field() ?>
                    <!-- Input ID Akun (Hidden) -->
                    <input type="hidden" id="id_akun" name="id_akun" value="<?= $akun['id_akun'] ?? ''; ?>">

                    <!-- Input Username -->
                    <div class="form-group mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input
                            type="text"
                            id="username"
                            name="username"
                            class="form-control"
                            value="<?= $akun['username'] ?? ''; ?>"
                            required>
                    </div>

                    <!-- Input Password -->
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password (kosongkan jika tidak ingin mengubah):</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-control">
                    </div>

                    <!-- Select Level -->
                    <div class="form-group mb-3">
                        <label for="level" class="form-label">Level:</label>
                        <select id="level" name="level" class="form-control" required>
                            <option value="admin" <?= (isset($akun['level']) && $akun['level'] == 'admin') ? 'selected' : ''; ?>>Admin</option>
                            <option value="manager" <?= (isset($akun['level']) && $akun['level'] == 'manager') ? 'selected' : ''; ?>>Manager</option>
                            <option value="karyawan" <?= (isset($akun['level']) && $akun['level'] == 'karyawan') ? 'selected' : ''; ?>>Karyawan</option>
                        </select>
                    </div>

                    <!-- Tombol Simpan -->
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-inverse-info" style="padding: 10px 15px;">Simpan</button>
                        <a href="<?= base_url('/pengguna') ?>" class="btn btn-secondary" style="padding: 10px 15px;">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>