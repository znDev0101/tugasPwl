<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH DATA MAHASISWA</title>
	<link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
	<main>
  <h1 class="text-center pt-5">Form Tambah data</h1>
	<form action="simpan.php" method="POST" class="container col-6 mt-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="txtnama" class="form-control" id="exampleInputText" required="true" placeholder="Nama..." aria-describedby="textHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">NPM</label>
    <input type="number" name="txtnpm" class="form-control" id="exampleInputtext1" required="true" placeholder="NPM...">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email Kontak</label>
    <input type="email" name="txtemail" class="form-control" id="exampleInputtext1" required="true" placeholder="Email...">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nomor Telp</label>
    <input type="number" name="txtnotelp" class="form-control" id="exampleInputtext1" required="true" placeholder="Nomor Telp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Judul Buku</label>
    <input type="text" name="txtjudul_buku" class="form-control" id="exampleInputtext1" required="true" placeholder="Judul buku...">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tanggal Peminjam</label>
    <input type="text" name="txttanggal_peminjam" class="form-control" id="exampleInputtext1" required="true" placeholder="Tanggal...">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tanggal Pengembalian</label>
    <input type="text" name="txttanggal_pengembalian" class="form-control" id="exampleInputtext1" required="true" placeholder="Tanggal...">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Hari</label>
    <input type="text" name="txthari" class="form-control" id="exampleInputtext1" required="true" placeholder="Hari...">
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
  <a href="index.php" class="btn btn-primary ms-4">Kembali</a>
</form>
	</main>
</body>
</html>