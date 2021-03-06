<!doctype html>
<html lang="en">
<?php
include_once("DAO/function.php");
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hapus Dosen</title>
</head>

<body>

    <div class="container">
        <!-- form -->
        <!-- menggunakan griid system 1 row = 12 col -->
        <h2 class="alert alert-primary text-center mt-5">Hapus Dosen</h2>
        <?php
        if (isset($_GET["NIP"])) {
            $db = dbConnect();
            $NIP = $db->escape_string($_GET["NIP"]);            
            $dataruang = getDataDosen($NIP);            
            if ($dataruang) {
                
                
        ?>
                <form action="dosen_simpan_hapus.php" method="post" name="frm">
                <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="NIP">NIP</label>
                            </div>
                            <div class="col-md-9">
                            <input type="hidden" name="NIP" id="NIP" class="form-control" placeholder="masukan NIP" value="<?php echo $dataruang["nip"]; ?>" readonly>
                                <?php echo $dataruang["nip"]; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="Nama">Nama</label>
                            </div>
                            <div class="col-md-9">
                                <?php echo $dataruang["nama"]; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="ttl">TTL</label>
                            </div>
                            <div class="col-md-9">
                                <?php echo $dataruang["ttl"]; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="jk">Jenis Kelamin (L/P) </label>
                            </div>
                            <div class="col-md-9">
                                <?php echo $dataruang["jk"]; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="NoTelp">No Telp</label>
                            </div>
                            <div class="col-md-9">
                                <?php echo $dataruang["no_telp"]; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="Alamat">Alamat</label>
                            </div>
                            <div class="col-md-9">
                                <?php echo $dataruang["alamat"]; ?>
                            </div>
                        </div>
                    </div>
                        <div class="form-group">
                            <div class="row mt-3">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-primary" name="TblUpdate">Simpan</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </div>
                            </div>
                        </div>

                </form>
        <?php
            } else
                echo "Data tidak ditemukan";
        } else
            echo "Data Tidak ada";
        ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>