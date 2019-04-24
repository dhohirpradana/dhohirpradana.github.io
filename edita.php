<?php
//untuk koneksi ke database
session_start();
include ("koneksi1.php");

//proses edit
if (isset($_POST['ubah'])) {
$id_alter   = $_POST['id'];
$alternatif = $_POST['nama'];

$sql ="UPDATE tab_alternatif SET nama_alternatif ='$alternatif' WHERE id_alternatif ='$id_alter'";
$query = mysqli_query($koneksi, $sql);

if ($query) {
echo "<script>alert('Ubah Data Dengan ID = ".$id_alter." Berhasil') </script>";
echo "<script>window.location.href = \"alternatif.php\" </script>";
} else {
    echo "Maaf Tidak Dapat Mengubah Data !";
}
}
?>
