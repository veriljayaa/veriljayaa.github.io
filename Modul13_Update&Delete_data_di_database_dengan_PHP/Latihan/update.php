<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kelas = $_POST['kelas'];

    $stmt = mysqli_prepare($conn, "UPDATE mahasiswa SET nama=?, alamat=?, kelas=? WHERE npm=?");

    mysqli_stmt_bind_param($stmt, 'ssss', $nama, $alamat, $kelas, $npm);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location:index.php?pesan=update");
} else {
    echo "Data gagal disimpan";
}
?>
