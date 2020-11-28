<?php 
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'smk';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('Gagal konek ke database');
