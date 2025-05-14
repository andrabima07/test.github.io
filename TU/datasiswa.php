<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="w
    idth=device-width, initial-scale=1.0">
    <title>TOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <img src="LOGO.jpeg" class="rounded-pill" style="width:40px;">
                    <span class="fs-5 d-none d-sm-inline"><div class="display-6">TOS</div></span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link align-middle px-0">
                            <i class="text-light fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline text-light">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="datasiswa.php" class="nav-link align-middle px-0">
                            <i class="text-light fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline text-light">Data Tabungan</span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php" class="nav-link px-0 align-middle">
                            <i class="text-light fs-4 bi-box-arrow-left"></i> <span class="ms-1 d-none d-sm-inline text-light">Logout</span> </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col py-3">
            <div class="container p-4 my-3 border">
                <h3>Data Tabungan Siswa</h3>
                <br>
                <a href="tambah.php" class="btn btn-outline-success">+ Tambah Siswa</a>
                <br>
                <br>
                    <table border="1" class="table">
                        <tr>
                            <th>No</th>
                            <th>Nasis</th>
                            <th>Kelas</th>
                            <th>Uang</th>
                        </tr>
                        <?php
                            include 'koneksi.php';
                            $no = 1;
                            $data = mysqli_query($con, "SELECT * FROM siswa");
                            while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['nasis'];?></td>
                            <td><?php echo $d['kelas']?></td>
                            <td><?php echo $d['uang']?></td>
                            <td>
                                <a href="edit.php?edt=<?php echo $d['nasis']; ?>">Edit</a>
                                <a href="hapus.php?hps=<?php echo $d['nasis']; ?>">Hapus</a>
                            </td>
                        </tr>
                        <?php
                        }
                    ?>
                    </table>
            </div>
        </div>
</body>
</html>