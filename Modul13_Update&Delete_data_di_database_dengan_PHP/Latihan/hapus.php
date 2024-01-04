<?php
include 'koneksi.php';

if (isset($_GET['npm'])) {
    $npm = $_GET['npm'];
    $stmt = mysqli_prepare($conn, "DELETE FROM mahasiswa WHERE npm = ?");
    mysqli_stmt_bind_param($stmt, 's', $npm);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location:index.php?pesan=hapus");
} else {
    echo "Data gagal dihapus";
}
?>
