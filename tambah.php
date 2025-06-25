<?php include 'koneksi.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $paket = $_POST['jenis_paket'];
    $mulai = $_POST['tanggal_mulai'];
    $berakhir = $_POST['tanggal_berakhir'];

    $query = "INSERT INTO anggota (nama, alamat, jenis_paket, tanggal_mulai, tanggal_berakhir)
              VALUES ('$nama', '$alamat', '$paket', '$mulai', '$berakhir')";
    mysqli_query($conn, $query);
    header("Location: index.php");
}
?>

<h2>Tambah Anggota Baru</h2>
<form method="POST">
    Nama: <input type="text" name="nama" required><br><br>
    Alamat: <textarea name="alamat" required></textarea><br><br>
    Jenis Paket: <input type="text" name="jenis_paket" required><br><br>
    Tanggal Mulai: <input type="date" name="tanggal_mulai" required><br><br>
    Tanggal Berakhir: <input type="date" name="tanggal_berakhir" required><br><br>
    <button type="submit">Simpan</button>
</form>
