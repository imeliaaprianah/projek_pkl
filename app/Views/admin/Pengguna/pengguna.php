<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>

<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <script>
        setTimeout(function() {
            $('.alert').fadeOut('slow');
        }, 3000); // Hilang setelah 3 detik
    </script>
<?php endif ?>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Pengguna</h4>
            <a href="/pengguna/tambah" class="btn btn-inverse-info mb-3" style="color: black; padding: 10px 15px;">
                Tambah Pengguna
            </a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Username </th>
                        <th> Level </th>
                        <th> Aksi </th>
                    </tr>
                    <?php $no = 1; ?>
                    <?php foreach ($dataakun as $a) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $a['username'] ?></td>
                            <td><?= $a['level'] ?></td>
                            <td>
                                <a href="/pengguna/edit/<?= $a['id_akun'] ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                <a href="/pengguna/delete/<?= $a['id_akun'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus data');"><i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </thead>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>