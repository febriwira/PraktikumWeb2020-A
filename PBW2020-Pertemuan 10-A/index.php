<?php
    session_start();
    error_reporting(0);

    if(isset($_POST["submit"]) ){
        $tempMhsw = array();

        $tempMhsw["nimMhsw"] = $_POST["nimMhsw"];
        $tempMhsw["namaMhsw"] = $_POST["namaMhsw"];
        $tempMhsw["nilai1Mhsw"] = $_POST["nilai1Mhsw"];
        $tempMhsw["nilai2Mhsw"] = $_POST["nilai2Mhsw"];
        $tempMhsw["totalNilai"] = $tempMhsw["nilai1Mhsw"]+$tempMhsw["nilai2Mhsw"];
        $tempMhsw["rataMhsw"] = $tempMhsw["totalNilai"]/2;
        if($_SESSION["dataMhsw"]){
            $dataMhsw = $_SESSION["dataMhsw"];
            array_push($dataMhsw,$tempMhsw);
            $_SESSION["dataMhsw"] = $dataMhsw;
          }else{
            $_SESSION["dataMhsw"][] = $tempMhsw;
        }
    } else if (isset($_POST["reset"]) ){
        session_destroy();
        echo '<script>
            alert("Daftar sudah terhapus semuanya!");
        </script>';

        header("Location: index.php");
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Form Nilai Mahasiswa</title>
        
        <!-- CSS Internal-->
        <style>
            body{
                background-color: #b6c2e0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto" style="margin-top: 10%;">
                    <div class="card shadow">
                        <div class="card-header">
                            <h5 class="card-title">Data Mahasiswa</h5>
                        </div>
                        <div class="card-body">
                            <form action="index.php" method="post">
                                <div class="form-group">
                                    <label for="nimMhsw">Nomor Induk Mahasisa (NIM)</label>
                                    <input type="text" class="form-control" id="nimMhsw" name="nimMhsw" value="" required="true" aria-describedby="nimMhsw">
                                </div>
                                <div class="form-group">
                                    <label for="namaMhsw">Nama Mahasiswa</label>
                                    <input type="text" class="form-control" id="namaMhsw" name="namaMhsw" value="" required="true" aria-describedby="namaMhsw">
                                </div>
                                <div class="form-group">
                                    <label for="nilai1Mhsw">Nilai 1</label>
                                    <input type="text" class="form-control" id="nilai1Mhsw" name="nilai1Mhsw" value="" required="true" aria-describedby="nilai1Mhsw">
                                </div><div class="form-group">
                                    <label for="nilai2Mhsw">Nilai 2</label>
                                    <input type="text" class="form-control" id="nilai2Mhsw" name="nilai2Mhsw" value="" required="true" aria-describedby="nilai2Mhsw">
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                            </form>
                            <form action="index.php" method="post">
                                <button type="submit" class="btn btn-danger mt-1" name="reset" id="reset">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if (!empty($_SESSION["dataMhsw"])  ): ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-5" style="margin-top: 10%;">
                        <div class="card shadow">
                            <div class="card-header">
                                <h5 class="card-title">Daftar Mahasiswa</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <?php foreach ($_SESSION["dataMhsw"] as $value): ?>
                                        <div class="col-md-4">
                                            <div class="list-group mb-3">
                                                <button type="button" class="list-group-item list-group-item-action active">
                                                    <h5 class="text-center">Mahasiswa</h5>
                                                </button>
                                                <button type="button" class="list-group-item list-group-item-action">NIM : <?= $value["nimMhsw"]; ?></button>
                                                <button type="button" class="list-group-item list-group-item-action">Nama : <?= $value["namaMhsw"]; ?></button>
                                                <button type="button" class="list-group-item list-group-item-action">Nilai 1 : <?= $value["nilai1Mhsw"]; ?></button>
                                                <button type="button" class="list-group-item list-group-item-action">Nilai 2 : <?= $value["nilai2Mhsw"]; ?></button>
                                                <button type="button" class="list-group-item list-group-item-action">Total Nilai : <?= $value["totalNilai"]; ?></button>
                                                <button type="button" class="list-group-item list-group-item-action">Rata-Rata : <?= $value["rataMhsw"]; ?></button>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?>

        <!-- Optional JavaScript -->
        <script src="script.js"></script>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>