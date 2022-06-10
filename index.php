<?php require 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Buku Perpustakaan</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/style.css">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Start Menu</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Table</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Peminjam buku perpustakaan</h1>
                    </div>
                    <!-- TABLE -->
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Mahasiswa</th>
      <th scope="col">Npm</th>
      <th scope="col">Email Kontak</th>
      <th scope="col">No Telp</th>
      <th scope="col">Judul buku</th>
      <th scope="col">Tanggal Peminjaman</th>
      <th scope="col">Tanggal Pengembalian</th>
      <th scope="col">Hari</th>
      <th scope="col">Aksi</th>
      
    </tr>
  </thead>
  <a class="btn btn-primary m-4" href="form_tambah.php">TAMBAH</a>
  <tbody>
      <!-- Table DataBase -->
  <?php 
				$sql = 'SELECT * FROM data_perpustakaan';
				$data = mysqli_query($conn, $sql);
				foreach ($data as $rows): ?>
				<tr>
					<td><?php echo $rows['id'] ?></td>
					<td><?php echo $rows['nama'] ?></td>
					<td><?php echo $rows['npm'] ?></td>
					<td><?php echo $rows['email'] ?></td>
					<td><?php echo $rows['notelp'] ?></td>
					<td><?php echo $rows['judul_buku'] ?></td>
					<td><?php echo $rows['tanggal_peminjam'] ?></td>
					<td><?php echo $rows['tanggal_pengembalian'] ?></td>
					<td><?php echo $rows['hari'] ?></td>
					<td>
						<a class="btn btn-warning" href="form_ubah.php?id=<?php echo $rows['id']?>">Ubah</a>
						<a class="btn btn-danger" onclick="return confirm('yakin data mau di hapus?')" href="hapus.php?id=<?php echo $rows['id']?>">Hapus</a>
					</td>
				</tr>
			<?php endforeach?>
  </tbody>
</table>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="./node_modules/bootstrap/js/dist/js"></script>
        <script src="./node_modules/bootstrap/js/src/scripts.js"></script>
        <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
    </body>
</html>
