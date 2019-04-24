<?php
//untuk koneksi ke database
session_start();
include ("koneksi1.php");

//proses edit
$id_poin = $_POST['id'];
$poin    = $_POST['poin'];

$sql = "UPDATE tab_poin SET poin ='".$poin."' WHERE id_poin='".$id_poin."' ";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    echo "<script>alert('Ubah Data Dengan ID = ".$id_poin." Berhasil') </script>";
    echo "<script>window.location.href = \"poin.php\" </script>";
    } else {
        echo "Maaf Tidak Dapat Mengubah Data !";
    }
?>
