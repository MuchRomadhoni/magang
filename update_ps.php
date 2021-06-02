<?php
    include "koneksi.php";

    if(isset($_POST['submit'])){
        $kode = $_POST['kode'];
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];

        $imageFile = $_FILES['gambar'];
        if ($imageFile['error'] != 4) {
            $namaFile = $_FILES['gambar']['name'];
            $namaSementara = $_FILES['gambar']['tmp_name'];
            // tentukan lokasi file akan dipindahkan
            $dirUpload = "images/";
            // pindahkan file
            $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

            $q = mysqli_query($conn, "UPDATE product_services SET judul_ps='$judul',isi_ps='$isi',img_ps='$namaFile' WHERE id_ps = '$kode'");
            if($q==1){
                header("location:edit_product.php");
            }else{
                echo $namaFile;
                echo $judul;
                echo $kode;
            }
        }else{
            $q = mysqli_query($conn, "UPDATE product_services SET judul_ps='$judul',isi_ps='$isi' WHERE id_ps = '$kode'");
            if($q==1){
                //echo "<pre>";
                //print_r($_FILES);
                //echo "</pre>";
                header("location:edit_product.php");
            }else{
                echo "gagal";
            }
        }
    }



?>
