<?php
    include "koneksi.php";

    $id = $_POST["id"];
    $sql = "update pesan set status=0 where id_pesan = '$id'";

    if (mysqli_query($conn, $sql)) {
        header("location: dashboard_pesan.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    mysqli_close($conn);

