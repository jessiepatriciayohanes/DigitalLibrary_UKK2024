<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Halaman Admin</title>
    <link rel="icon" href="../asset/img/logo smk mts.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
         body {
            font-family: "Lato", sans-serif;
            transition: background-color .5s;
         }

         .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

         .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
         }

         .sidenav a:hover {
            color: #f1f1f1;
         }

         .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
         }

         .nav {
            transition: margin-left .5s;
            padding: 16px;
            background-color: #111;
            color: #ffff;
         }

         @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
         }
         .card {
            margin-top: 20px;
        }
         .gambar {
            height: 300px;
            width: 500px;
            margin-left: 400px;
         }
         .footer {
            margin-top: 0px;
         }
    </style>
</head>
<body>
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="../index.php"><i class="fas fa-power-off"></i> Logout</a>
    <a href="index_adm.php"><i class="fas fa-chalkboard"></i> Dashboard</a>
    <a href="buku.php"><i class="fas fa-book"></i> Data Buku</a>
    <a href="anggota.php"><i class="fas fa-users"></i> Data Anggota</a>
    <a href="peminjam.php"><i class="fas fa-book-reader"></i> Data Peminjam</a>
    <a href="ulasan.php"><i class="fas fa-book-open"></i> Data Ulasan</a>
    <a href="laporan.php"><i class="fas fa-file-alt"></i> Laporan</a>
    </div>
    <div id="main">
    <div class="nav">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img src="../asset/img/logo smk mts.png" width="50px"> Menu</span>
    </div>
    <div class="container">
      <?php

      include '../koneksi/koneksi.php';

      $buku = mysqli_query($koneksi, "SELECT * FROM buku");
      $user = mysqli_query($koneksi, "SELECT * FROM user");
      $pinjam = mysqli_query($koneksi, "SELECT * FROM peminjaman");
      $ulasanbuku = mysqli_query($koneksi, "SELECT * FROM ulasanbuku");


      $b = mysqli_num_rows($buku);
      $u = mysqli_num_rows($user);
      $p = mysqli_num_rows($pinjam);
      $ub = mysqli_num_rows($ulasanbuku);

      ?>
    <div class="row my-3">
      <h4>Selamat Datang, <h4>
      <h5>Admin SMK Management Training System</h5>
    </div>

    <div class="row">
    <div class="col-sm-3">
      <div class="card">
        <div class="card-body text-white text-center bg-primary">
          <h2>Data Buku</h2>
          <h1><i class="fas fa-book"></i> = <b><?php echo $b;?></b></h1>
        </div>
        <a href="buku.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card">
        <div class="card-body text-white text-center bg-primary">
      
          <h2>Data Anggota</h2>
          <h1><i class="fas fa-users"></i> = <b><?php echo $u;?></b></h1>
        </div>
        <a href="anggota.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card">
        <div class="card-body text-white text-center bg-primary">
          <h2>Data Peminjam</h2>
          <h1><i class="fas fa-book-reader"></i> = <b><?php echo $p;?></b></h1>
        </div>
        <a href="peminjam.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card">
        <div class="card-body text-white text-center bg-primary">
          <h2>Data Ulasan</h2>
          <h1><i class="fas fa-book-open"></i> = <b><?php echo $ub;?></b></h1>
        </div>
        <a href="ulasan.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
      </div>
    </div>

   <img src="../asset/img/a.jpg" class="gambar">
    <div class="footer">
    <p align="center">&copy; SMK Management Training System</p>
    </div>
    </div>
    <script>
    function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
    }
    </script>
</body>
</html>