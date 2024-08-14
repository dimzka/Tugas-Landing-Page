<?php
// membuat array untuk koneksi database
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'db_sekolah');

// membuat koneksi ke database
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// mengecek koneksi ke database
if (mysqli_connect_errno()) {
    die('Database connection failed ' . mysqli_connect_error());
} else {
    // echo "Database connected";
}
