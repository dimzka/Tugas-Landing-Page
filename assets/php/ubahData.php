<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $keterangan = $_POST['keterangan'];

    $query = "UPDATE tb_kontak SET nama='$nama', email='$email', keterangan='$keterangan' WHERE id='$id'";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query Failed!" . mysqli_error($connection));
    }

    if ($result) {
        echo "<script>alert('Data Diubah');</script>";
        echo "<script>window.location.href = 'kontakFormTampil.php';</script>";
        exit();
    } else {
        echo "<script>alert('Data tidak diubah');</script>";
        echo "<script>window.location.href = 'kontakFormTampil.php';</script>";
        exit();
    }
}
