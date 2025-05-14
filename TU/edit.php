<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <br>
    <a href="datasiswa.php" class="btn btn-outline-success">KEMBALI</a>
    <br>
    <br>
    <h3>EDTI DATA SISWA</h3>

    <?php
    include "koneksi.php";
    $id = $_GET["edt"];
    $data = mysqli_query($con, "SELECT * FROM siswa where nasis='$id'");
    while($d = mysqli_fetch_array($data)){
    ?>
    <form method="POST" action="update.php">
        <table>
            <tr>
                <td>Nasis</td>
                <td>
                    <input type="hidden" name="idx" value="<?php echo $d["id"]?>">
                    <input type="text" name="nas" value="<?php echo $d["nasis"]; ?>">
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kls" value="<?php echo $d["kelas"]; ?>"></td>
            </tr>
            <tr>
                <td>Uang</td>
                <td><input type="number" name="oea" value="<?php echo $d["uang"]; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN" class="btn-success"></td>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>
</body>
</html>