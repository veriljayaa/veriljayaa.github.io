<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST["judul"];
    $penulis = $_POST["penulis"];
    $penerbit = $_POST["penerbit"];
    $tahun = $_POST["tahun"];

    $query = "INSERT INTO buku (judul, penulis, penerbit, tahun_terbit) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);  // Mengganti $data menjadi $stmt

    mysqli_stmt_bind_param($stmt, "sssi", $judul, $penulis, $penerbit, $tahun);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    echo "Data berhasil disimpan.";
}
?>
