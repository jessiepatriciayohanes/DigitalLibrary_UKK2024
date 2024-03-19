<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Edit Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="../../asset/img/logo smk mts.png" type="image/png">
    <style>
        body {
          background-color: #22313f;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card" style="margin-top: 2rem;">
            <div class="row m-4">

                <div class="col-sm-7">
                    <h3>Form Edit Anggota</h3>
                    <?php
                        include '../../koneksi/koneksi.php';
                        $id = $_GET['iduser'];
                        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE IDuser='$id'");
                        $data = mysqli_fetch_array($query);
                    ?>
                    <a href="../anggota.php" class="btn btn-danger my-2">Kembali</a>
                    <form action="e_anggota.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="" class="form-label">Username</label>
                            <input type="text" name="username" value="<?= htmlspecialchars($data['username']) ?>" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" value="<?= htmlspecialchars($data['email']) ?>" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="nis" class="form-label">NIS</label>
                                    <input type="text" name="nis" value="<?= htmlspecialchars($data['nis']) ?>" class="form-control" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="namalengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" name="namalengkap" value="<?= htmlspecialchars($data['namalengkap']) ?>" class="form-control" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" value="<?= htmlspecialchars($data['alamat']) ?>" class="form-control" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="level" class="form-label">Level</label>
                            <select class="form-select" name="level" aria-label="Default select example">
                                <option selected><?= htmlspecialchars($data['level']) ?> </option>
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                                <option value="peminjam">Peminjam</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Perbaharui</button>
                        <input type="hidden" name="iduser" value="<?= htmlspecialchars($data['IDuser']) ?>">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"nintegrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>