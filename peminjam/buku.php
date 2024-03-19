<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>Halaman Peminjam</title>
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
            margin-left: 35px;
            margin-top: 35px;
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
  <a href="index_pmj.php"><i class="fas fa-chalkboard"></i> Dashboard</a>
  <a href="buku.php"><i class="fas fa-book"></i> Daftar Buku</a>
  <a href="ulasan.php"><i class="fas fa-book-open"></i> Ulasan Buku</a>
  </div>
  <div id="main">
  <div class="nav">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img src="../asset/img/logo smk mts.png" width="50px"> Menu</span>
  </div>
  <div class="container" style="margin-top: 2rem;">
  <div class="row">
      <h3>Digital Library - Daftar Buku</h3>
      <?php
          include '../koneksi/koneksi.php';
          $no = 1;
          $data = mysqli_query($koneksi, "SELECT * FROM buku Order by IDbuku asc");
        
          while ($d = mysqli_fetch_array($data)) {        
      ?>

        <div class="card" style="width: 14rem;">
        <img src="../asset/img/<?php echo $d['foto']; ?>" height="300" alt="">
            <div class="card-body">
                <h5 class="card-title"><?php echo $d['judul'];?></h5>
                <h6 class="text-left"><?php echo $d['deskripsi'];?></h6>
                <a href="data/detail.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-warning text-white">Detail</a>
                <a href="data/pinjam_buku.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-primary">Pinjam</a>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
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
