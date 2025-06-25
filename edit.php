<?php include 'koneksi.php'; ?>

<?php
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM anggota WHERE id=$id");
$row = mysqli_fetch_assoc($data);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $paket = $_POST['jenis_paket'];
    $mulai = $_POST['tanggal_mulai'];
    $berakhir = $_POST['tanggal_berakhir'];

    $query = "UPDATE anggota SET 
              nama='$nama', alamat='$alamat', jenis_paket='$paket', 
              tanggal_mulai='$mulai', tanggal_berakhir='$berakhir' 
              WHERE id=$id";
    mysqli_query($conn, $query);
    header("Location: index.php");
}
?>

<h2>Edit Data Anggota</h2>
<form method="POST">
    Nama: <input type="text" name="nama" value="<?= $row['nama'] ?>" required><br><br>
    Alamat: <textarea name="alamat" required><?= $row['alamat'] ?></textarea><br><br>
    Jenis Paket: <input type="text" name="jenis_paket" value="<?= $row['jenis_paket'] ?>" required><br><br>
    Tanggal Mulai: <input type="date" name="tanggal_mulai" value="<?= $row['tanggal_mulai'] ?>" required><br><br>
    Tanggal Berakhir: <input type="date" name="tanggal_berakhir" value="<?= $row['tanggal_berakhir'] ?>" required><br><br>
    <button type="submit">Update</button>
</form>
