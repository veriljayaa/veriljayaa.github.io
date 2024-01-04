<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Services Motor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3 class="text-center">Formulir Services Motor</h3>
                </div>
                <div class="card-body">
                    <form action="proses_simpan.php" method="post">
                        <div class="form-group mb-3">
                            <label for="nama">Nama Pelanggan:</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="jenis_motor">Jenis Motor:</label>
                            <input type="text" class="form-control" id="jenis_motor" name="jenis_motor" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="keluhan">Keluhan:</label>
                            <textarea class="form-control" id="keluhan" name="keluhan" rows="3" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-6 mt-5">
            <table class="table table-bordered">
                <thead>
                    <h2 class="text-center">Data Layanan Services Motor</h2>
                    <tr>
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Jenis Motor</th>
                        <th scope="col">Keluhan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "koneksi.php";
                    $data = mysqli_query($conn, "SELECT * FROM layanan_motor");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['jenis_motor']; ?></td>
                            <td><?php echo $d['keluhan']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha384-eOJQp6nG/luvRSk0SgoHEUfSN5jNf6/KJFcQSSdAVoIJSKDhQf/Jm0BssY2S6jDH" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-c3O2B9d0sL1UU6dhjBnBQckcVSQ5BY/GSbLzj3E+q2mxI5RQwRDOaRKOjXDe21D6" crossorigin="anonymous"></script>

</body>
</html>
