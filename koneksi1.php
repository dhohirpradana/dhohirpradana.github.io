<?php
$host = "remotemysql.com:3306";
$user = "uwuXWnNdCS";
$pass = "JqFnNv81gs";
$db   = "uwuXWnNdCS";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
  echo "Belum Konek";
} else {
  //echo "Sudah Konek";
}
 ?>
