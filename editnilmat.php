<?php
//untuk koneksi ke database
session_start();
include ("koneksi.php");

//proses edit

$krit1   = $_POST['krit'];
$alt1 = $_POST['alter'];
$poin1 = $_POST['nilai'];

$sql ="UPDATE tab_topsis SET nilai ='$poin1' WHERE id_kriteria='$krit1' and id_alternatif='$alt1'";
$query = mysqli_query($koneksi, $sql);

if ($query) {
echo "<script>alert('Ubah Data Dengan Kode Alternatif ".$alt1." dan Kode Kriteria = ".$krit1."  Berhasil') </script>";
echo "<script>window.location.href = \"nilmat.php\" </script>";
} else {
    echo "Maaf Tidak Dapat Mengubah Data !";
}
?>
