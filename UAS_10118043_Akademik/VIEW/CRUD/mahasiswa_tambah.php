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

    <title>Tambah Mahasiswa</title>
</head>

<body>
    <div class="container">
        <!-- form -->
        <!-- menggunakan griid system 1 row = 12 col -->
        <h2 class="alert alert-primary text-center mt-5">Tambah Mahasiswa</h2>
        <form action="mahasiswa_simpan_tambah.php" method="post" name="frm">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label for="NIP">NIM</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="NIM" id="NIM" class="form-control" placeholder="masukan NIM mahasisawa">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label for="Nama">Nama</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="Nama" id="Nama" class="form-control" placeholder="masukan Nama mahasisawa">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label for="ttl">TTL</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="TTL" id="ttl" class="form-control" placeholder="masukan ttl mahasisawa">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label for="jk">Jenis Kelamin (L/P) </label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="JK" id="jk" class="form-control" placeholder="masukan jenis kelamin mahasisawa L/P">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label for="NoTlp">No Telp</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="NoTlp" id="NoTlp" class="form-control" placeholder="masukan no telp mahasisawa">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label for="Alamat">Alamat</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="Alamat" id="Alamat" class="form-control" placeholder="masukan alamat mahasisawa">
                    </div>
                </div>
            </div>    
           <div class="form-group">
                <div class="row mt-3">
                    <div class="col-md-3">
                        <label for="IdFakultas">Id Jurusan</label>
                    </div>
                    <div class="col-md-9">
                        <select name="IdJurusan" id="IdJurusan" class="form-control">
                        <option value="">Pilih Jurusan</option>

                        <?php
                        $data = getListJurusan();
                        foreach ($data as $barisdata) {
                            echo "<option value=\"" . $barisdata["id_jurusan"] . "\">" . $barisdata["id_jurusan"] . "</option>\n";
                        }
                        ?>

                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row mt-3">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <button type="submit" class="btn btn-primary" name="TblSimpan">Simpan</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </div>            
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>