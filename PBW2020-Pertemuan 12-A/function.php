<?php
    $conn = mysqli_connect("localhost", "root", "", "pbw12");
    //checking connection
    if(mysqli_connect_errno() ){
        echo "Koneksi database gagal : ".mysqli_connect_error();
    }

    function query($query){
        global $conn;

        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result) ){
            $rows[] = $row;
        }
        return $rows;
    }

    function update($dataMhsw){
        global $conn;

        $nimMhsw = htmlspecialchars($dataMhsw["nimMhsw"]);
        $namaMhsw = htmlspecialchars($dataMhsw["namaMhsw"]);
        $angkatanMhsw = htmlspecialchars($dataMhsw["angkatanMhsw"]);
        $fakultasMhsw = htmlspecialchars($dataMhsw["fakultasMhsw"]);
        $jurusanMhsw = htmlspecialchars($dataMhsw["jurusanMhsw"]);

        $query = "UPDATE mahasiswa SET 
            nimMhsw = '$nimMhsw',
            namaMhsw = '$namaMhsw',
            angkatanMhsw = '$angkatanMhsw',
            fakultasMhsw = '$fakultasMhsw',
            jurusanMhsw = '$jurusanMhsw'

            WHERE nimMhsw = '$dataMhsw[nimMhsw]'
        ";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
?>