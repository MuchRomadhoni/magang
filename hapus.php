<?php
    include "koneksi.php";

    $id = $_POST["id"];
    $sql = "delete from pesan where id_pesan = '$id'";

    if (mysqli_query($conn, $sql)) {
        header("location: arsip_pesan.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    mysqli_close($conn);

