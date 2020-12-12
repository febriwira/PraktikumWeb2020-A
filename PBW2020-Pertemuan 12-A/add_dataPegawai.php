<?php
    session_start();
    require 'function.php';

    if ( isset($_POST["submit"]) ) {
        $nimMhsw = $_POST["nimMhsw"];
        $namaMhsw = $_POST["namaMhsw"];
        $angkatanMhsw = $_POST["angkatanMhsw"];
        $fakultasMhsw = $_POST["fakultasMhsw"];
        $jurusanMhsw = $_POST["jurusanMhsw"];

        $query = "INSERT INTO mahasiswa
          VALUES
            ('$nimMhsw','$namaMhsw', '$angkatanMhsw', '$fakultasMhsw', '$jurusanMhsw')
          ";
        mysqli_query($conn, $query);
        echo "<script>
            alert('Data berhasil ditambah.');
            document.location.href = 'indexPegawai.php';
        </script>";
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <title>Data Mahasiswa</title>
    </head>
    <body>
        <div class="container">
            <div class="card shadow mb-4 mt-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add Data</h6>
                </div>
                <div class="card-body">
                    <form class="add_product" action="" method="post" enctype="multipart/form-data">
                        <span><strong>NIM</strong></span>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="nimMhsw" name="nimMhsw">
                        </div>
                        <span><strong>Nama Mahasiswa</strong></span>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="namaMhsw" name="namaMhsw">
                        </div>
                        <span><strong>Angkatan</strong></span>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="angkatanMhsw" name="angkatanMhsw">
                        </div>
                        <span><strong>Fakultas</strong></span>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="fakultasMhsw" name="fakultasMhsw">
                        </div>
                        <span><strong>Jurusan</strong></span>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control" id="jurusanMhsw" name="jurusanMhsw">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        -->
    </body>
</html>