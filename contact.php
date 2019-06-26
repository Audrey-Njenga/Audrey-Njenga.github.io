<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "audnjenga7@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n" .$message;

    mail($mailTo, $phone, $txt, $headers);
    header("Location:  contact.html?mailsend");
  }

