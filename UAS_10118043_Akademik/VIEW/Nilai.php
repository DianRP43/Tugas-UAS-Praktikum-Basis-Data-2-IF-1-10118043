<!doctype html>
<html lang="en">
<?php
    include_once("CRUD/DAO/function.php");
    ?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script src="../bootstrap/js/bootstrap.min.js"></script>
  <title>Data Nilai</title>
</head>

<body>

  <div class="container">
    <h2 class="text-center m-3">Data Nilai</h2>
    <a class="btn btn-warning" href="../index.php" role="button">Kembali</a>
    <form class="form-inline" method="GET" action="CRUD/nilai_cari.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="cari">      
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Cari Data</button>
      <a class="btn btn-primary m-3" href="CRUD/nilai_tambah.php" role="button">Tambah Data</a>
    </form>
    <!-- INCLUDE -->
    <?php    
    $db = dbConnect();
    if ($db->connect_errno == 0) {
      $sql = "SELECT * FROM  nilai ";
      $res = $db->query($sql);
      if ($res) {
    ?>
        <!-- END -->
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">NIM</th>
              <th scope="col">Id Matakuliah</th>
              <th scope="col">Angka</th>
              <th scope="col">Indeks</th>
            </tr>
          </thead>
          <!-- INCLUDE -->
          <?php
          $data = $res->fetch_all(MYSQLI_ASSOC);
          foreach ($data as $barisdata) {
          ?>
            <!-- END -->
            <tbody>
              <tr>
                <td scope="row"><?php echo $barisdata["nim"]; ?></td>
                <td scope="row"><?php echo $barisdata["id_matakuliah"]; ?></td>
                <td scope="row"><?php echo $barisdata["angka"]; ?></td>
                <td scope="row"><?php echo $barisdata["indeks"]; ?></td>
                <td>
                <a class="btn btn-danger" href="CRUD/nilai_hapus.php?NIM=<?php echo $barisdata["nim"];?> & IdMatkul=<?php echo $barisdata["id_matakuliah"];?> & Angka=<?php echo $barisdata["angka"];?> & Indeks=<?php echo $barisdata["indeks"];?>" role="button">Hapus</a>
                <a class="btn btn-success" href="CRUD/nilai_ubah.php?NIM=<?php echo $barisdata["nim"];?> & IdMatkul=<?php echo $barisdata["id_matakuliah"];?> & Angka=<?php echo $barisdata["angka"];?> & Indeks=<?php echo $barisdata["indeks"];?>" role="button">Ubah</a>
                </td>
                <!-- INCLUDE -->
              <?php
            }
              ?>
              <!-- END -->
              </tr>
            </tbody>
        </table>
    <?php
      } else
        echo "Error : " . $db->error . "<br>";
    } else
      echo "Error";
    ?>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
</body>

</html>