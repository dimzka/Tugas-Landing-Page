<!DOCTYPE html>
<html>

<head>
    <title>Form Tambah Data</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css?h=91180125d193e45e653b99b7314045c4">
    <link rel="stylesheet" href="../boostrap/css/Raleway.css?h=f11e5762fc5623cb0c53b23af2a0ee48" />
</head>

<body>
    <nav class="navbar navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href=""><span>Sekolahku</span></a><button
                data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <p class="nav-link">Menu Beta</p>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../../index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="kontakFormTampil.php">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="py-5 mt-5"></section>
    <div class="container">
        <h2>Form Tambah Data</h2>
        <form action="prosesData.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="pesan">keterangan</label>
                <textarea type="telepon" class="form-control" id="keterangan" name="keterangan" required>
                </textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
</body>

</html>