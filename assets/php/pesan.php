<?php

include 'connection.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Inisialisasi PHPMailer
require '../../vendor/autoload.php';
$mail = new PHPMailer(true);

// Pengaturan SMTP
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'poliprojek@gmail.com';
$mail->Password = 'pwhduvehyyaujyul';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Pengaturan email
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO tb_kontak (nama, email, keterangan) VALUES ('$name', '$email', '$message')";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query Failed!" . mysqli_error($connection));
    }

    $subject = 'Keluhan Pengguna: ' . $name;

    // Pesan dalam format HTML
    $mail_message = '
    <!DOCTYPE html>
    <html>
    <head>
        <title>Keluhan Pengguna</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f5f5f5;
                margin: 0;
                padding: 0;
            }

            .container {
                max-width: 600px;
                margin: 0 auto;
                background-color: #ffffff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            h3 {
                color: #333;
            }

            p {
                color: #555;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h3>Keluhan Pengguna</h3>
            <p>Nama: ' . $name . '</p>
            <p>Email: ' . $email . '</p>
            <p>Pesan:</p>
            <p>' . $message . '</p>
        </div>
    </body>
    </html>
    ';
    // Kirim email
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addReplyTo('poliprojek@gmail.com');
    $mail->addAddress($email);
    $mail->Subject = $subject;
    $mail->Body = $mail_message;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    try {
        // Kirim email
        $mail->send();
        echo "<script>alert('Keluhan telah dikirim');</script>";
        echo "<script>window.location.href = '../../index.html';</script>";
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"
            . "<script>alert('Keluhan gagal dikirim');</script>";
        echo "<script>window.location.href = '../../index.html';</script>";
        exit();
    }
}
