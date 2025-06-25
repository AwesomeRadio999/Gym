<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Anggota Gym</title>
</head>
<body>
    <h2>Daftar Anggota Gym</h2>
    <a href="tambah.php">+ Tambah Anggota Baru</a><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Paket</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Berakhir</th>
            <th>Aksi</th>
        </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM anggota");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nama']}</td>
                <td>{$row['alamat']}</td>
                <td>{$row['jenis_paket']}</td>
                <td>{$row['tanggal_mulai']}</td>
                <td>{$row['tanggal_berakhir']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Edit</a> | 
                    <a href='hapus.php?id={$row['id']}' onclick=\"return confirm('Yakin hapus data?')\">Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
