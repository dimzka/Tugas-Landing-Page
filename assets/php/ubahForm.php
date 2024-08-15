<?php
include 'connection.php';

//buat form untuk ubah data
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = "SELECT * FROM tb_kontak WHERE id='$id'";
    $result = mysqli_query($connection, $query);

    while ($dataA = mysqli_fetch_assoc($result)) {
        $id = $dataA['id'];
        $nama = $dataA['nama'];
        $email = $dataA['email'];
        $keterangan = $dataA['keterangan'];
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Ubah Data</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css?h=91180125d193e45e653b99b7314045c4">
    <link rel="stylesheet" href="../boostrap/css/Raleway.css?h=f11e5762fc5623cb0c53b23af2a0ee48" />
</head>

<body>
    <div class="container">
        <h2>Form Ubah Data</h2>
        <form action="ubahData.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" value="<?php echo $nama; ?>" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" value="<?php echo $email; ?>" name="email" required>
            </div>
            <div class="form-group">
                <label for="pesan">keterangan</label>
                <textarea type="telepon" class="form-control" id="keterangan" placeholder="<?php echo $keterangan; ?>"
                    name="keterangan" required></textarea>
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <a href="kontakFormTampil.php" class="btn btn-warning">Kembali</a>
            <button type="submit" name="submit" class="btn btn-primary">Ubah Data</button>
        </form>
    </div>
</body>

</html>