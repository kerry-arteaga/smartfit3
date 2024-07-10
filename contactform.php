<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailfrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailto = "smartfitn3ss@yahoo.com";
    $headers = "From: ".$mailfrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailto, $subject, $txt, $headers);
    header("Location:https://www.smartfit3.com/contact.html");
}

?>