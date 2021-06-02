<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style>
        html, body {
            max-width: 100%;
            overflow-x: hidden;
        }
    </style>
    <title>MRS</title>
</head>
<body>
<!-- awal navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #002171">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/mrslogo.png" alt="" width="30" height="24" class="d-inline-block align-top">
            PT. Multi Rizulka Sakti
        </a>
        <div class="navbar-nav" >
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Produk & Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- akhir navbar -->


<!-- awal kontak kami -->
<div class="pt-5 mt-5 w-100" id="layanan">
    <div class="row">
        <div class="col">
            <h1 style="padding-left: 5%">Kontak Kami</h1>
            <hr class="4">
        </div>
    </div>
    <!-- Background putih -->
    <div class="row text-left pt-5 pb-5">
        <!-- style="background-color: #cccccc; height: 200px " -->
        <div class="col-4">
            <img src="img/img.png" class="rounded mx-auto d-block img-fluid">
        </div>
        <div class="col-8">
            <h5>PT. MULTI RAZULKA SAKTI</h5>
            <p style="padding-right: 8%"><br> Alamat : <br> Jl. Trunojoyo, Desa Bakalan Kec. Bululawang - Malang</p>
            <div class="row">
                <div class="col">
                    <i class="fa fa-phone" aria-hidden="true" style="transform: scaleX(-1); animation: spin-reverse 2s infinite linear;"></i>
                </div>
                <div class="col-11" style="float: left">
                    081232253444
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                </div>
                <div class="col-11" style="float: left">
                    www.ptmultirazulkasakti.com
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
                <div class="col-11" style="float: left">
                    ptmrsindonesia@gmail.com
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-left pt-5 pb-5">
            <h5>Tinggalkan pesan</h5>
            <form action="insert_pesan.php" method="post">
                <div class="row pt-3">
                    <div class="col">
                        <label for="namaanda" class="form-label">Nama Anda</label>
                        <input type="text" name="nama" id="namaanda" class="form-control" required>
                    </div>
                    <div class="col">
                        <label for="emailanda" class="form-label">Email Anda</label>
                        <input type="text" name="email" id="emailanda" class="form-control" required>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <label for="subjek" class="form-label">Subjek</label>
                        <input type="text" name="subjek" id="subjek" class="form-control" required>
                    </div>
                    <div class="col">
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <label for="pesan" class="form-label">Pesan Anda</label>
                        <textarea class="form-control" name="isi" id="pesan" rows="3" required></textarea>
                    </div>
                </div>
                <br>
                <button class="btn btn-outline-dark">Kirim</button>
            </form>
        </div>
    </div>
</div>
<!-- akhir kontak kami -->

<!-- footer -->
<div class="row pt-5 pb-5" style="background-color: #002171">
    <div class="col-12" style="color: #f1f1f1; margin-left: 5%">
        <h5 style="padding-top: 1%">Berkomitmen dalam membangun negeri</h5>
        <p style="padding-bottom: 1%">Fokus dan komitmen untuk meraih kepercayaan, loyalitas, dan kepuasan pelanggan</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col pt-2 text-center">
            <img src="img/mrslogo.png" width="35" height="30" class="d-inline-block align-top center mb-2 mt-2">
            <h5 class="">PT. Multi Rizulka Sakti</h5>
            <hr class="mb-0">
            <nav class="navbar navbar-expand-lg justify-content-center pt-0" style="color: #002171">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Produk & Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Kontak</a>
                    </li>
                </ul>
            </nav>
            <p class="pt-5">PT. Multi Rizulka Sakti <br> General Contractor, AMP, & Batching Plant</p>
        </div>
    </div>
</div>



<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
-->


</body>
</html>