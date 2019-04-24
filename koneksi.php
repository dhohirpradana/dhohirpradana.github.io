<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "topsis";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
  echo "Belum Konek";
} else {
  //echo "Sudah Konek";
}
 ?>
