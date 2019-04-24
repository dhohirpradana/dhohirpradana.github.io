<?php
//untuk koneksi ke database
session_start();
include ("koneksi1.php");

//proses edit
$id_krit  = $_POST['id_krit'];
$kriteria = $_POST['kriteria'];
$bobot    = $_POST['bobot'];

$sql   ="UPDATE tab_kriteria SET nama_kriteria ='".$kriteria."',bobot ='".$bobot."' WHERE id_kriteria='".$id_krit."'";
$query = mysqli_query($koneksi, $sql);

if ($query) {
echo "<script>alert('Ubah Data Dengan ID = ".$id_krit." Berhasil') </script>";
echo "<script>window.location.href = \"kriteria.php\" </script>";
} else {
    echo "Maaf Tidak Dapat Mengubah Data !";
}
?>
