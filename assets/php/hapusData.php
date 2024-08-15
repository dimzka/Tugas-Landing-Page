<?php
include 'connection.php';

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $query = "DELETE FROM tb_kontak WHERE id='$id'";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query Failed!" . mysqli_error($connection));
    }

    if ($result) {
        echo "<script>alert('Data Dihapus');</script>";
        echo "<script>window.location.href = 'kontakFormTampil.php';</script>";
        exit();
    } else {
        echo "<script>alert('Data tidak dihapus');</script>";
        echo "<script>window.location.href = 'kontakFormTampil.php';</script>";
        exit();
    }
}