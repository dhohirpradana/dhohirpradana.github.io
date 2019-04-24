<?php
//untuk koneksi ke database
session_start();
include ("koneksi1.php");

//proses tambah
//$sql = "DROP TABLE tab_kriteria";
$sql = "INSERT INTO tab_poin VALUES ('1','60','60')";
//$sql = "CREATE TABLE tab_poin(no VARCHAR(10),id_poin VARCHAR(10),poin VARCHAR(10))";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    echo "Data Ditambah";
    } else {
        echo "Maaf Tidak Dapat MenambahData !";
    }
?>
