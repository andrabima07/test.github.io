<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <a href="datasiswa.php" class="btn btn-outline-danger">KEMBALI</a>
    <br>
    <br>
    <h3>TAMBAH DATA SISWA</h3>
    <form method="POST" action="tambah_aksi.php">
        <table>
            <tr>
                <td>Nasis</td>
                <td><input type="text" name="nasis"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr>
                <td>Uang</td>
                <td><input type="number" name="uang"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SUBMIT" class="btn btn-success"></td>
            </tr>
        </table>
    </form>
</body>
</html>