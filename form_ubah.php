<?php 
require 'koneksi.php'; 
$id_mhs = $_REQUEST['id'];
$sql = "SELECT * FROM data_perpustakaan WHERE id='$id_mhs'";
$result = mysqli_query($conn,$sql);
foreach ($result as $rows) {
	$id   = $rows['id'];
	$nama = $rows['nama'];
	$npm  = $rows['npm'];
	$email  = $rows['email'];
	$notelp  = $rows['notelp'];
	$judul_buku  = $rows['judul_buku'];
	$tanggal_peminjam  = $rows['tanggal_peminjam'];
	$tanggal_pengembalian  = $rows['tanggal_pengembalian'];
	$hari  = $rows['hari'];

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>UBAH DATA MAHASISWA</title>
  <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
<main>
  <h1 class="text-center pt-5">Form Ubah data</h1>
	<form action="ubah.php" method="POST" class="container col-6 mt-5">
  <div class="mb-3">
    <input type="hidden" name="txtid" class="form-control" id="exampleInputText" required="true" value="<?php echo $id ?>" placeholder="Nama..." aria-describedby="textHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="txtnama" class="form-control" id="exampleInputText" required="true" value="<?php echo $nama ?>" placeholder="Nama..." aria-describedby="textHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">NPM</label>
    <input type="number" name="txtnpm" class="form-control" id="exampleInputtext1" required="true" value="<?php echo $npm ?>" placeholder="NPM...">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email Kontak</label>
    <input type="email" name="txtemail" class="form-control" id="exampleInputtext1" required="true" value="<?php echo $email ?>" placeholder="Email...">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nomor Telp</label>
    <input type="number" name="txtnotelp" class="form-control" id="exampleInputtext1" required="true" value="<?php echo $notelp ?>" placeholder="Nomor Telp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Judul Buku</label>
    <input type="text" name="txtjudul_buku" class="form-control" id="exampleInputtext1" required="true" value="<?php echo $judul_buku ?>" placeholder="Judul buku...">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tanggal Peminjam</label>
    <input type="text" name="txttanggal_peminjam" class="form-control" id="exampleInputtext1" required="true" value="<?php echo $tanggal_peminjam ?>" placeholder="Tanggal...">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tanggal Pengembalian</label>
    <input type="text" name="txttanggal_pengembalian" class="form-control" id="exampleInputtext1" required="true" value="<?php echo $tanggal_pengembalian ?>" placeholder="Tanggal...">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Hari</label>
    <input type="text" name="txthari" class="form-control" id="exampleInputtext1" required="true" value="<?php echo $hari ?>" placeholder="Hari...">
  </div>
  <button type="submit" class="btn btn-success">Ubah</button>
  <a href="index.php" class="btn btn-primary ms-4">Kembali</a>
</form>
	</main>
</body>
</html>