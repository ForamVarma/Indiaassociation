<?php

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    if (empty($name) || empty($email) || empty($subject) || empty($number) || empty($message)) {
        header('location:index.php?error');
    } else {
        // $to = "indiaassociationocala@gmail.com";
        $to = "info@indiaocala.org";
        // $to = "samdesigning2020@gmail.com";

        if (mail($to, $subject, $number, $message, $email,)) {
            header("location:index.php?succes");
        }
    }
} else {
    header("location:index.php");
}
