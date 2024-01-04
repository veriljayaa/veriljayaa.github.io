<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Perpuskotamadiun</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3 class="text-center">Formulir Perpuskotamadiun</h3>
                </div>
                <div class="card-body">
                    <form action="proses_simpan.php" method="post">
                        <div class="form-group mb-3">
                            <label for="judul">Judul Buku:</label>
                            <input type="text" class="form-control" id="judul" name="judul" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="penulis">Penulis:</label>
                            <input type="text" class="form-control" id="penulis" name="penulis" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="penerbit">Penerbit:</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="tahun">Tahun Terbit:</label>
                            <input type="number" class="form-control" id="tahun" name="tahun" min="1900" max="2099" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-6 mt-5">
    <table class="table border">
        <thead>
            <tr>
                <h2 class="text-center">Data Perpuskotamadiun</h2>
                <th scope="col">No</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Penulis</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $nomor = 1;
            $data = mysqli_query($conn, "select * from buku");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $d['judul']; ?></td>
                    <td><?php echo $d['penulis']; ?></td>
                    <td><?php echo $d['penerbit']; ?></td>
                    <td><?php echo $d['tahun_terbit']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha384-eOJQp6nG/luvRSk0SgoHEUfSN5jNf6/KJFcQSSdAVoIJSKDhQf/Jm0BssY2S6jDH" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-c3O2B9d0sL1UU6dhjBnBQckcVSQ5BY/GSbLzj3E+q2mxI5RQwRDOaRKOjXDe21D6" crossorigin="anonymous"></script>

</body>
</html>
