<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1.0;" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css" href="style.css">
</head>

<body>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "Login gagal! username atau password salah!";
        } else if ($_GET['pesan'] == "Logout") {
            echo "Anda berhasil logout";
        } elseif ($_GET['pesan'] == "belum_login") {
            echo "Anda harus login terlebih dahulu";
        }
    }
    ?>
    <div id="container">
        <div class="login">
            <h1>Login</h1>
            <p>Harap Login Terlebih Dahulu</p>
            <form action="auth.php" method="POST" onsubmit="return validasi()">
                <div>
                    <label for="">Username:</label>
                    <input type="text" name="username" id="username" />
                </div>
                <div>
                    <label for="">Password:</label>
                    <input type="text" name="password" id="password" />
                </div>
                <div>
                    <input type="submit" value="Login" class="tombol">
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="login.js"></script>
</body>

</html>