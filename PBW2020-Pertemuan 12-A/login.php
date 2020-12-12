<?php
    session_start();
    require 'function.php';

    if(isset($_POST["submit"]) ){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn,  "SELECT * FROM user WHERE username = '$username'");
    
        //checking username
        if(mysqli_num_rows($result) === 1){
            //checking password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"]) ){
                $_SESSION["user"] = $row;
                    echo "<script>
                      alert('Login berhasil!');
                      document.location.href = 'index.php';
                    </script>";
                    exit;
                // if ($row["level"]==1) {
                //     //set session
                //     $_SESSION["user"] = $row;
                //     echo "<script>
                //       alert('Login berhasil!');
                //       document.location.href = 'index.php';
                //     </script>";
                //     exit;
                // } else if ($row["level"]==2) {
                //     //set session
                //     $_SESSION["user"] = $row;
                //     echo "<script>
                //       alert('Login berhasil!');
                //       document.location.href = 'index.php';
                //     </script>";
                //     exit;
                // }
            }
        }
        $error = true;
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
        <?php  if( isset($error) ) : ?>
            <p style="color : red; font-style: italic"> Username / Password salah</p>
        <?php endif ?>
        <div class="col-md-5 mx-auto" style="margin-top: 15%;">
            <h3>Login</h3>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" aria-describedby="usernameHelp">
                    <div id="usernameHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
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