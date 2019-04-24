<?php
//koneksi
session_start();
include ("koneksi1.php");

//perintah untuk menampilkan hasil edit
$id_poin = $_GET['id_poin'];
$query   = $koneksi->query("SELECT * FROM tab_poin WHERE id_poin = '".$id_poin."'");

while ($row = $query->fetch_array())
  {
    $nama  = $row[1];
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Metode Topsis</title>
    <!--bootstrap-->
    <link href="tampilan/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

    <!--menu-->
    <nav class="navbar navbar-default navbar-custom">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">SPK Metode Topsis</a>
        </div>

        <div class="collapse navbar-collapse">

        </div>
      </div>
    </nav>

    <div class="container">

      <div class="row">
        <!--form poin-->
        <div class="col-lg-6 col-lg-offset-3">
          <div class="panel panel-default">
            <div class="panel-heading text-center">
              Edit Nilai
            </div>

            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <form class="form" action="editp.php" method="post">
                    <div class="form-group">
                      <input class="form-control" type="text" name="id" value= <?php echo $_GET['id_poin']; ?> readonly>
                    </div>
                    <div class="form-group">
                      <input class="form-control" type="text" name="poin" value= <?php echo $nama; ?> >
                    </div>
                    <div class="form-group">
                      <a href="poin.php"><button type="button" class="btn btn-danger">Batal</button></a>
                      <button type="submit" class="btn btn-success">Ubah</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--form poin-->

      </div>
    </div>

    <!--footer-->
    <footer class="text-center">
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <em>Copyright &copy; Dhohir Pradana - 201751068 - 2019</em>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
