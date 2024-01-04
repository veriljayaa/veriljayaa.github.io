<!DOCTYPE html>
<html>
<head>
    <title>Membuat Database dan Menampilkan data dari database dengan PHP </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>Membuat Koneksi Dengan PHP Dan MySQL</h1>
        <h2>Menampilkan data dari database</h2>
        <h3>www.unipma.ac.id</h3>
    </div>
    
    <br/><br/>
    
    <h3>Data Mahasiswa</h3>
    <table border="1" class="table">
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kelas</th>
        </tr>
        
        <?php
        include "koneksi.php";
        $nomor = 1;
        $data = mysqli_query($conn,"select * from mahasiswa");
        while($d = mysqli_fetch_array($data)){
            ?>
            
            <tr>
                <td><?php echo $d['npm']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['kelas']; ?></td>
            </tr>

        <?php
            }
        ?>
    </table>
</body>
</html>