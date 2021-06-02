<?php
    include "koneksi.php";

    $nama = $_POST["name"];
    $email = $_POST["email"];
    $subjek = $_POST["subject"];
    $pesan = $_POST["message"];
    $date = date("Y-m-d");
    $sql = "insert into pesan(tanggal,nama,email,subjek,isi,status) values ('$date','$nama','$email','$subjek','$pesan',1)";

    if (mysqli_query($conn, $sql)) {
        header("location: terimakasih.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    mysqli_close($conn);

