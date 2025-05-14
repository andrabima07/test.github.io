<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="h-100 bg-info d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 mx-auto bg-light p-4">
                <img src="LOGO.jpeg" class="rounded-pill items-align-center" style="width:40px;">
                 <form action="login.php" method="post">
                    <table>
                        <tr>
                            <td>Nama Pengguna</td>
                            <td><input type="text" name="pengguna"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="sandiz"></td>
                        </tr>
                        <td></td>
                        <tr>
                            <td><input type="submit" name="login" value="Log In" class="btn-outline-success"></td>
                        </tr>
              
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>