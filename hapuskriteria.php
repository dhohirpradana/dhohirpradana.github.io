<?php
//untuk koneksi ke database
session_start();
include ("koneksi1.php");

//proses delete
$id_krit = $_GET['id_kriteria'];
$sql     = "DELETE FROM tab_kriteria WHERE id_kriteria = '$id_krit' ";
$hapus   = $koneksi->query($sql);

if ($hapus) {
  echo "<script>alert('Hapus ID = ".$id_krit." Berhasil') </script>";
  echo "<script>window.location.href = \"kriteria.php\" </script>";
} else {
  echo "Maaf Tidak Dapat Menghapus !";
}
?>
