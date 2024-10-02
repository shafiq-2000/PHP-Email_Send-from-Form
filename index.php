<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];

    $mail = new PHPMailer(true);

    $mail->isSMTP(); //Send using SMTP
    $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
    $mail->SMTPAuth = true;
    $mail->Username = 'your username**'; //***sent email
    $mail->Password = 'your app password**'; //***password this email(app password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    //Recipients
    $mail->setFrom('abc@gmail.com', 'Shafiq'); //***sent email
    $mail->addAddress('abc@gmail.com', 'Fahad'); //***Receiver email

    $mail->addAttachment('image/mim.png', 'new.png');  //file send
    //Content
    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = 'Email from website';
    $mail->Body = "Name: {$name} <br> Email: {$email} <br> Phone: {$phone} <br> Comment: {$msg}";


    $mail->send();

    if (!$mail->send()) {
        echo "<script>alert('Email success') </script>";
    } else {
        echo "<script>alert('Email has been successfully') </script>";
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Boothstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- css link -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="container">

    <h3 class="display-5 text-center text-danger mt-5">Send Email Using PHPMailer</h3>

    <!-- Login form   -->
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card mt-2">
                <h5 class=" card-header text-center display-5 ">User Registration</h5>
                <div class="card-body">
                    <form method="post" class="form">
                        <div class="mb-3">
                            <label> Name</label>
                            <input type="text" name="name" placeholder="Enter your name" class=" name form-control formEntry">
                        </div>

                        <div class="mb-3">
                            <label>Email address</label>
                            <input type="email" name="email" placeholder="Enter your email" class="email form-control formEntry">
                        </div>

                        <div class="mb-3">
                            <label>Phone Number</label>
                            <input type="text" name="phone" placeholder="Enter your phone" class="formEntry phone form-control">
                        </div>
                        <div class="mb-3">
                            <label>Comment</label>
                            <textarea name="msg" class="msg formEntry"></textarea>
                        </div>
                        <button type="submit" name="submit" class=" btn btn-success btn-sm text-center formEntry">SendEmail</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- Boothstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

    <!-- font-awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"
        integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- main js -->
    <script src="js/main.js"></script>
</body>

</html>