<?php include 'cek-login.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <div class="container-fluid">
        <img src="LOGO.jpeg" class="rounded-pill" style="width:40px;">
        <a class="navbar-brand" href="LOGO.jpeg">TOS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="Logout.php">Logout</a>
        </li>
      </ul>
    </div>
    </div>

</nav>
<div class="container-fluid">
    HALOO
    <?php
        $t = date("H");

        if($t <= 10){
            echo "Selamat pagi";
        }elseif($t <= 18){
            echo "Selamat Sore";
        }else{
            echo "Selamat Malam";
        }
        ?>
</div>
<br>
<br>
<table class="table">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Uang</th>
</tr>
<?php
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($con,"SELECT * FROM siswa");
    while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['nasis']; ?></td>
    <td><?php echo $d['kelas']; ?></td>
    <td><?php echo $d['uang']; ?></td>
</tr>
<?php
    }
?>
</table>
</div>
</body>
</html>