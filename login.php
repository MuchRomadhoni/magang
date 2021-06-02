<?php
    include "koneksi.php";

    session_start();

    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $sql = "SELECT * from user";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if($row["username"]==$username && $row["password"]==$password){
                session_start();
                $_SESSION["username"] = $username;
                header("location: dashboard_pesan.php");
            }
            else{
                header("location: admin_login.php");
            }
        }
    }
    mysqli_close($conn);

