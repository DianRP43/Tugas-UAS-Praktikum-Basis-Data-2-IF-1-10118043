<!doctype html>
<html lang="en">
<?php
    include_once("DAO/function.php");    
    $db = dbConnect();
    $cariNo = $db-> escape_string($_GET["cari"]);
    $sql = "SELECT * FROM jurusan where id_jurusan LIKE '%$cariNo%'";
    $res = $db->query($sql);
    $data = $res->fetch_all(MYSQLI_ASSOC);
    ?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>Data Cari Jurusan</title>
</head>
<body>
  <div class="container">
    <h2 class="text-center m-3">Data Cari Jurusan</h2>    
    <!-- INCLUDE -->    
        <!-- END -->
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Id Jurusan</th>
              <th scope="col">Id Fakultas</th>
              <th scope="col">Nama Jurusan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <!-- INCLUDE -->
          <?php          
          foreach ($data as $barisdata) {
          ?>
            <!-- END -->
            <tbody>
              <tr>
                <td scope="row"><?php echo $barisdata["id_jurusan"]; ?></td>
                <td scope="row"><?php echo $barisdata["id_fakultas"]; ?></td>
                <td scope="row"><?php echo $barisdata["nama_jurusan"]; ?></td>
                <td>
                <a class="btn btn-danger" href="jurusan_hapus.php?IdJurusan=<?php echo $barisdata["id_jurusan"];?>" role="button">Hapus</a>
                  <a class="btn btn-success" href="jurusan_ubah.php?IdJurusan=<?php echo $barisdata["id_jurusan"];?>" role="button">Ubah</a>
                </td>
                <!-- INCLUDE -->
              <?php
            }
              ?>
              <!-- END -->
              </tr>
            </tbody>
        </table>   
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