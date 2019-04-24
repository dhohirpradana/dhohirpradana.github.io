<?php
//koneksi
session_start();
include("koneksi1.php");

$alternatif = $_POST['alter'];
$kriteria   = $_POST['krit'];
$poin       = $_POST['nilai'];

$tambah = $koneksi->query('SELECT * FROM tab_topsis');
$cek=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tab_topsis WHERE id_kriteria='$kriteria' and id_alternatif='$alternatif'" ));

if ($cek > 0){
  $sql1 ="UPDATE tab_topsis SET nilai ='$poin' WHERE id_kriteria='$kriteria' and id_alternatif='$alternatif'";
  $query = mysqli_query($koneksi, $sql1);
  if($query){
  echo "<script>alert('Ubah Data Dengan Alternatif = ".$alternatif." dan Kriteria = ".$kriteria."  Berhasil') </script>";
  echo "<script>window.location.href = \"nilmat.php\" </script>";
  }
}elseif($cek=0){
  $masuk = "INSERT INTO tab_topsis VALUES ('".$alternatif."','".$kriteria."','".$poin."')";
  $buat  = $koneksi->query($masuk);
  if($buat){
  echo "<script>alert('Input Data Berhasil') </script>";
  echo "<script>window.location.href = \"nilmat.php\" </script>";
  }
}else{
  echo "<script>alert('Tidak ada perubahan, Harap lengkapi form !')</script>";
  echo "<script>window.location.href = \"nilmat.php\" </script>";
}


//if ($row = $tambah->fetch_row()) {

 // $masuk = "INSERT INTO tab_topsis VALUES ('".$alternatif."','".$kriteria."','".$poin."')";
 // $buat  = $koneksi->query($masuk);

 // echo "<script>alert('Input Data Berhasil') </script>";
 // echo "<script>window.location.href = \"nilmat.php\" </script>";
//}else{
  //$sql1 ="UPDATE tab_topsis SET nilai ='$poin' WHERE id_kriteria='$krit' and id_alternatif='$alt'";
//$query = mysqli_query($koneksi, $sql1);
//echo "<script>alert('Ubah Data Dengan Alternatif = ".$alt." dan Kriteria = ".$krit."  Berhasil') </script>";
//echo "<script>window.location.href = \"nilmat.php\" </script>";
//}
//}

 ?>
