<?php

$host = '101.50.1.56';
$user = 'tokojeru_dev';
$password = 'p;hzO$Q(5c=f';
$database = 'tokojeru_webinarhmif3';

$koneksi = mysqli_connect($host, $user, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi gagal");
}
