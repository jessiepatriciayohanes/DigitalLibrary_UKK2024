<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Ulasan Buku</title>
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
    <div class="card" style="margin: 3rem;">
    <div class="row m-4">
            <div class="col-sm-7">
                <h3>Form Ulasan Buku</h3>
                <a href="../buku.php" class="btn btn-danger m-2">Kembali</a>
                <form action="t_ulasan.php" method="POST">
                    <div class="mb-3">
                        <label for="IDbuku" class="form-label">ID Buku</label>
                        <input type="text" name="IDbuku" class="form-control" required id="IDbuku" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="IDuser" class="form-label">ID User</label>
                        <input type="text" name="IDuser" class="form-control" required id="IDuser" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="Ulasan" class="form-label">Ulasan</label>
                        <input type="text" name="Ulasan" class="form-control" required id="Ulasan" aria-describedby="emailHelp">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="Rating" class="form-label">Rating</label>
                                <input type="text" name="Rating" class="form-control" required id="Rating" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>