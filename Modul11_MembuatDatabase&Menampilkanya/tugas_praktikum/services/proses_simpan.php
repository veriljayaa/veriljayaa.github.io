<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $jenis_motor = $_POST["jenis_motor"];
    $keluhan = $_POST["keluhan"];

    $query = "INSERT INTO layanan_motor (nama, jenis_motor, keluhan) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    mysqli_stmt_bind_param($stmt, "sss", $nama, $jenis_motor, $keluhan);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    echo "Data berhasil disimpan.";
}
?>
