<?php
//untuk koneksi ke database
session_start();
include ("koneksi1.php");

//proses delete
$id_alter = $_GET['id_alternatif'];
$sql   = "DELETE FROM tab_alternatif WHERE id_alternatif = '$id_alter' ";
$hapus = $koneksi->query($sql);

if ($hapus === TRUE) {
  echo "<script>alert('Hapus ID = ".$id_alter." Berhasil') </script>";
  echo "<script>window.location.href = \"alternatif.php\" </script>";
} else {
  echo "Maaf Tidak Dapat Menghapus !";
}

?>
