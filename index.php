<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"crossorigin="anonymous">
    </script>
    <link rel="icon" href="asset/img/logo smk mts.png" type="image/png">
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="aksi/cek_login.php" method="post" class="sign-in-form">
            <h2 class="title">Sign In</h2>
            <?php
            if(isset($_GET['pesan'])) {
              if ($_GET['pesan']=="gagal") {
                echo '<div class="alert alert-danger">Username atau Password Anda Salah</div>';
              }
            }
          ?>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" class="form-control" required id="exampleInputPassword1" aria-describedby="emailHelp" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <div class="social-media">
              </a>
            </div>
          </form>
          <form action="aksi/proses_daftar.php" method="post" class="sign-up-form">
            <h2 class="title">Sign Up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="nis" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIS">
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="namalengkap" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" name="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-map-marker-alt"></i>
              <input type="text" name="alamat" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" class="form-control" required id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="input-field">
            <i class="fas fa-briefcase"></i>
            <select class="form-select" name="level" aria-label="Default select example">
                        <option selected>Pilih</option>
                        <option value="admin">Admin</option>
                        <option value="petugas">Petugas</option>
                        <option value="peminjam">Peminjam</option>
            </select>
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <div class="social-media">
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
          <img src="asset/img/logo smk mts.png" width="50px">
            <h3>Tidak Memiliki Akun ?</h3>
            <p>
              Klik tombol dibawah ini untuk Sign Up!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign Up
            </button>
          </div>
          <img src="asset/img/login.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
          <img src="asset/img/logo smk mts.png" width="50px">
            <h3>Sudah Memiliki Akun ?</h3>
            <p>
              Klik tombol dibawah ini untuk Login!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign In
            </button>
          </div>
          <img src="asset/img/register.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>