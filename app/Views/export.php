<div class="card-body">
    <h4 class="card-title">Data Selesai Pasang Baru Perluasan</h4>
    <table id="tablePerluasan" border=1 class="table table-bordered">
        <thead>
            <tr>
                <th> No </th>
                <th> Tanggal Input</th>
                <th> Tanggal Selesai</th>
                <th> Nama Pelanggan </th>
                <th> Nama Pemohon </th>
                <th> Tanggal Pembuatan Surat </th>
                <th> Surat Mohon Pasang Baru </th>
                <th> No Handphone </th>
                <th> Daya Mohon </th>
                <th> Kartu Induk Penduduk (KTP) </th>
                <th> Nomor Pokok Wajib Pajak (NPWP) </th>
                <th> Titik Koordinat </th>
                <th> Alamat Pasang Baru </th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($datapelanggan as $a) :
                if ($a['hasil_survey'] == 'perluasan') {
            ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $a['tanggal_input'] ?></td>
                        <td><?= $a['tanggal_selesai'] ?></td>
                        <td><?= $a['nama_pelanggan'] ?></td>
                        <td><?= $a['nama_pemohon'] ?></td>
                        <td><?= $a['tanggal_pembuatan_surat'] ?></td>
                        <td><?= $a['surat_mohon_pasang_baru'] ?></td>
                        <td><?= $a['no_handphone'] ?></td>
                        <td><?= $a['daya_mohon'] ?></td>
                        <td><?= $a['ktp'] ?></td>
                        <td><?= $a['npwp'] ?></td>
                        <td><?= $a['titik_koordinat'] ?></td>
                        <td><?= $a['alamat_pasang_baru'] ?></td>
                    </tr>
            <?php
                }
            endforeach; ?>
        </thead>
    </table>
</div>
<div class="card-body">
    <h4 class="card-title">Data Selesai Pasang Baru Non Perluasan</h4>
    <table id="tableNonPerluasan" border=1 class="table table-bordered">
        <thead>
            <tr>
                <th> No </th>
                <th> Tanggal Input</th>
                <th> Tanggal Selesai</th>
                <th> Nama Pelanggan </th>
                <th> Nama Pemohon </th>
                <th> Tanggal Pembuatan Surat </th>
                <th> Surat Mohon Pasang Baru </th>
                <th> No Handphone </th>
                <th> Daya Mohon </th>
                <th> Kartu Induk Penduduk (KTP) </th>
                <th> Nomor Pokok Wajib Pajak (NPWP) </th>
                <th> Titik Koordinat </th>
                <th> Alamat Pasang Baru </th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($datapelanggan as $a) :
                if ($a['hasil_survey'] == 'non_perluasan') {

            ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $a['tanggal_input'] ?></td>
                        <td><?= $a['tanggal_selesai'] ?></td>
                        <td><?= $a['nama_pelanggan'] ?></td>
                        <td><?= $a['nama_pemohon'] ?></td>
                        <td><?= $a['tanggal_pembuatan_surat'] ?></td>
                        <td><?= $a['surat_mohon_pasang_baru'] ?></td>
                        <td><?= $a['no_handphone'] ?></td>
                        <td><?= $a['daya_mohon'] ?></td>
                        <td><?= $a['ktp'] ?></td>
                        <td><?= $a['npwp'] ?></td>
                        <td><?= $a['titik_koordinat'] ?></td>
                        <td><?= $a['alamat_pasang_baru'] ?></td>
                <?php
                }
            endforeach; ?>
        </thead>
    </table>

    <!-- Tambahkan ini di dalam file HTML Anda -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <script>
        function exportTableToExcel(tableID, filename = '') {
            let table = document.getElementById(tableID);
            let wb = XLSX.utils.book_new();
            let ws = XLSX.utils.table_to_sheet(table);

            XLSX.utils.book_append_sheet(wb, ws, "Sheet1");

            filename = filename ? filename + ".xlsx" : "data.xlsx";
            XLSX.writeFile(wb, filename);
        }

        // Auto export ketika halaman dimuat
        window.onload = function() {
            exportTableToExcel('tablePerluasan', 'Data_Pasang_Baru_Perluasan');
            exportTableToExcel('tableNonPerluasan', 'Data_Pasang_Baru_Non_Perluasan');
        };
    </script>