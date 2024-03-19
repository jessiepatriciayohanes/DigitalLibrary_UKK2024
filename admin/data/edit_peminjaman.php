<?php
include '../../koneksi/koneksi.php';

if(isset($_GET['IDpeminjaman'])) {
    $id = mysqli_real_escape_string($koneksi, $_GET['IDpeminjaman']);
    
    $query = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE IDpeminjaman='$id'");
    $data = mysqli_fetch_array($query);
} else {
    header("Location: ../peminjam.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Edit Peminjaman</title>
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
                    <h3>Form Edit Peminjaman</h3>
                    <a href="../peminjam.php" class="btn btn-danger my-2">Kembali</a>
                    <form action="e_peminjaman.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="idbuku" class="form-label">ID Buku</label>
                            <input type="text" name="IDbuku" value="<?= $data['IDbuku'] ?>" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="iduser" class="form-label">ID User</label>
                            <input type="text" name="IDuser" value="<?= $data['IDuser'] ?>" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Peminjam</label>
                            <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="tgl_peminjaman" class="form-label">Tanggal Peminjaman</label>
                                    <input type="date" name="tgl_peminjaman" value="<?= $data['tgl_peminjaman'] ?>" class="form-control" required id="tgl_peminjaman" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="tgl_pengembalian" class="form-label">Tanggal Pengembalian</label>
                                    <input type="date" name="tgl_pengembalian" value="<?= $data['tgl_pengembalian'] ?>" class="form-control" required id="tgl_pengembalian" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                        <label for="status_peminjaman" class="form-label">Status Peminjaman</label>
                        <select class="form-select" name="status_peminjaman" aria-label="Default select example">
                                <option selected><?= $data['status_peminjaman'] ?></option>
                                <option value="dipinjam">Pinjam</option>
                                <option value="dikembalikan">Kembali</option>
                            </select>
                        </div>
                        <input type="hidden" name="idpeminjaman" value="<?= $id ?>">
                        <button type="submit" class="btn btn-primary">Perbaharui</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>