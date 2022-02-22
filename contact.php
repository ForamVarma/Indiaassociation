<?php

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['message'];

    if (empty($name) || empty($email) || empty($subject) || empty($msg)) {
        header('location:index.php?error');
    } else {
        // $to = "indiaassociationocala@gmail.com";
        $to = "info@indiaocala.org";
        // $to = "samdesigning2020@gmail.com";

        if (mail($to, $subject, $msg, $email)) {
            header("location:index.php?succes");
        }
    }
} else {
    header("location:index.php");
}
