<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form String dan Tanggal</title>
</head>
<body>
  <form method="post" action="">
    Masukkan Nama, Email, dan Password<br>
    Default Nama = belajar, Email = test@gmail.com, dan Password = Madiun<br>

    Isian data : <br>
    Nama : <input type="text" name="nama"><br>
    Email : <input type="text" name="email"><br>
    Password : <input type="password" name="password"><br>
    <input type="submit" value="Cek"><br>
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nama = $_POST["nama"];
      $email = $_POST["email"];
      $password = $_POST["password"];

      $defaultNama = "belajar";
      $defaultEmail = "test@gmail.com";
      $defaultPassword = "Madiun";

      if (empty($email)) {
        echo "Harap mengisi email <br>";
      } else {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
          if ($email == $defaultEmail) {
            echo "Alamat email : $email valid<br>";
          } else {
            echo "Alamat email : $email tidak valid<br>";
          }
        } else {
          echo "Format email : tidak valid<br>";
        }
      }
      if (!empty($password)) {
        if ($password == $defaultPassword) {
          echo "Password : valid";
        } else {
          echo "Password : Salah";
        }
      }
    }
  ?>
</body>
</html>
