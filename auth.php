<?php
include "koneksi.php";
$username = $_POST['username'];
$pass = $_POST['password'];
$login = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username' AND password='$pass'");
$row = mysqli_fetch_array($login);
if ($row['username'] == $username and $row['password'] == $pass) {
    session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    header('location:berhasil.html');
} else {
    echo "<script>alert('Username atau Password salah');</script>";
    echo "<script>location = 'index.php';</script>";
}
