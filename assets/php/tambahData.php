<!DOCTYPE html>
<html>

<head>
    <title>Form Tambah Data</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css?h=91180125d193e45e653b99b7314045c4">
    <link rel="stylesheet" href="../boostrap/css/Raleway.css?h=f11e5762fc5623cb0c53b23af2a0ee48" />
</head>

<body>
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