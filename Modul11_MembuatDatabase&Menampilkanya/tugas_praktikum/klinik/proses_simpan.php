<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $usia = $_POST["usia"];
    $keluhan = $_POST["keluhan"];

    $query = "INSERT INTO klinik_sehat (nama, usia, keluhan) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    mysqli_stmt_bind_param($stmt, "sis", $nama, $usia, $keluhan);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}
?>

