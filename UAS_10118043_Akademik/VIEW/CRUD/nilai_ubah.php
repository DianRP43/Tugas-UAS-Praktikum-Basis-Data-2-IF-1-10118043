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

    <title>Ubah Nilai</title>
</head>

<body>

    <div class="container">
        <!-- form -->
        <!-- menggunakan griid system 1 row = 12 col -->
        <h2 class="alert alert-primary text-center mt-5">Ubah Nilai</h2>
        <?php
        if (isset($_GET["NIM"])) {
            $db = dbConnect();
            $NIM = $db->escape_string($_GET["NIM"]);
            $dataruang = getDataMahasiswa($NIM);
            if ($dataruang) {
        ?>
                <form action="nilai_simpan_ubah.php" method="post" name="frm">

                    <div class="form-group">
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="NIM">NIM</label>
                            </div>
                            <div class="col-md-9">
                                <select name="NIM" id="NIM" class="form-control">
                                    <option value="">Pilih NIM</option>
                                    <?php
                                    $data = getListMahasiswa();
                                    foreach ($data as $barisdata) {

                                        echo "<option value=\"" . $barisdata["nim"] . "\" " . ($barisdata["nim"] == $dataruang["nim"] ? "selected" : "") . ">" . $barisdata["nim"] . "</option>\n";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="IdMatkul">Id Matakuliah</label>
                            </div>
                            <div class="col-md-9">
                                <select name="IdMatkul" id="IdMatkul" class="form-control">
                                    <option value="<?php echo $_GET["IdMatkul"]; ?>"><?php echo $_GET["IdMatkul"]; ?></option>        
                                            
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="Angka">Angka</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="Angka" id="Angka" class="form-control" placeholder="masukan Angka"  value="<?php echo $_GET["Angka"]; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label for="Indeks">Indeks</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="Indeks" id="Indeks" class="form-control" placeholder="masukan Indeks" value="<?php echo $_GET["Indeks"]; ?>">
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