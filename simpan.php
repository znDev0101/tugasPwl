<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Simpan</title>
	<link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
<?php 
require 'koneksi.php';
$data = array(
	'nama' => $_POST['txtnama'],
	'npm' => $_POST['txtnpm'],
	'email' => $_POST['txtemail'],
	'notelp' => $_POST['txtnotelp'],
	'judul_buku' => $_POST['txtjudul_buku'],
	'tanggal_peminjam' => $_POST['txttanggal_peminjam'],
	'tanggal_pengembalian' => $_POST['txttanggal_pengembalian'],
	'hari' => $_POST['txthari'],
);

$key = array_keys($data);

$val = array_values($data);

$sql = "INSERT INTO data_perpustakaan(".implode(', ', $key) . ") ". "VALUES ('".implode("', '", $val) . "')";

mysqli_query($conn,$sql);

if ($sql) {echo '<div class="alert alert-success container col-6 mt-5" role="alert">
	<storng>Data Berhasil Di simpan</strong>
  </div>
  </br>
  <div class="text-center">
  <a href="index.php" class="btn btn-primary mt-2">Kembali</a>
  </div>';}
else {echo 'Error cuyy: ' . $sql . '<br>' . mysqli_error($conn);}
mysqli_close($conn);
?>
</body>
</html>

