<?php

if (isset($_POST['submit'])) {
    $name = $_POST['first_name'];
    $name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $mailTo = "milomoeude@gmail.com"
    $headers = "From: " .$emailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $name, $txt, $headers);

    header("Location: inde.html?MessageSent");
}
?>