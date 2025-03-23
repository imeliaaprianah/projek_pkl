<div class="card-body">
    <h4 class="card-title">Data Selesai Perubahan Daya Perluasan</h4>
    <table id="tablePerluasan" border=1 class="table table-bordered">
        <thead>
            <tr>
                <th> No </th>
                <th> Tanggal Input</th>
                <th> Tanggal Selesai</th>
                <th> Id Pelanggan</th>
                <th> Alamat </th>
                <th> Nama Pelanggan </th>
                <th> Tanggal Pembuatan Surat </th>
                <th> Surat Mohon Perubahan Daya </th>
                <th> Daya Awal </th>
                <th> Daya Akhir </th>
                <th> No Handphone </th>
                <th> Kartu Induk Penduduk (KTP) </th>
                <th> Nomor Pokok Wajib Pajak (NPWP) </th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($datapelanggan as $a) :
                if ($a['hasil_survey'] == 'perluasan') {
            ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $a['tanggal_input'] ?></td>
                        <td><?= $a['tanggal_selesai'] ?></td>
                        <td><?= $a['idpel'] ?></td>
                        <td><?= $a['alamat'] ?></td>
                        <td><?= $a['nama_pelanggan'] ?></td>
                        <td><?= $a['tanggal_pembuatan_surat'] ?></td>
                        <td><?= $a['surat_mohon_perubahan_daya'] ?></td>
                        <td><?= $a['daya_awal'] ?></td>
                        <td><?= $a['daya_akhir'] ?></td>
                        <td><?= $a['no_handphone'] ?></td>
                        <td><?= $a['ktp'] ?></td>
                        <td><?= $a['npwp'] ?></td>
                    </tr>
            <?php
                }
            endforeach; ?>
        </thead>
    </table>
</div>
<div class="card-body">
    <h4 class="card-title">Data Selesai Perubahan Daya Non Perluasan</h4>
    <table id="tableNonPerluasan" border=1 class="table table-bordered">
        <thead>
            <tr>
                <th> No </th>
                <th> Tanggal Input</th>
                <th> Tanggal Selesai</th>
                <th> Id Pelanggan</th>
                <th> Alamat </th>
                <th> Nama Pelanggan </th>
                <th> Tanggal Pembuatan Surat </th>
                <th> Surat Mohon Perubahan Daya </th>
                <th> Daya Awal </th>
                <th> Daya Akhir </th>
                <th> No Handphone </th>
                <th> Kartu Induk Penduduk (KTP) </th>
                <th> Nomor Pokok Wajib Pajak (NPWP) </th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($datapelanggan as $a) :
                if ($a['hasil_survey'] == 'non_perluasan') {

            ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $a['tanggal_input'] ?></td>
                        <td><?= $a['tanggal_selesai'] ?></td>
                        <td><?= $a['idpel'] ?></td>
                        <td><?= $a['alamat'] ?></td>
                        <td><?= $a['nama_pelanggan'] ?></td>
                        <td><?= $a['tanggal_pembuatan_surat'] ?></td>
                        <td><?= $a['surat_mohon_perubahan_daya'] ?></td>
                        <td><?= $a['daya_awal'] ?></td>
                        <td><?= $a['daya_akhir'] ?></td>
                        <td><?= $a['no_handphone'] ?></td>
                        <td><?= $a['ktp'] ?></td>
                        <td><?= $a['npwp'] ?></td>
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