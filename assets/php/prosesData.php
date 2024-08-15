<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $keterangan = $_POST['keterangan'];

    $query = "INSERT INTO tb_kontak (nama, email, keterangan) VALUES ('$nama', '$email', '$keterangan')";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query Failed!" . mysqli_error($connection));
    }

    if ($result) {
        echo "<script>alert('Data Disimpan');</script>";
        echo "<script>window.location.href = 'kontakFormTampil.php';</script>";
        exit();
    } else {
        echo "<script>alert('Data tidak disimpan');</script>";
        echo "<script>window.location.href = 'kontakFormTampil.php';</script>";
        exit();
    }
}
