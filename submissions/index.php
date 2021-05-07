<?php

if(isset($_POST["submit"])) {
    $recipient="abcpestcontrolpatna@gmail.com";
    $subject="Service";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name:  $_POST[first] $_POST[last]\n\n
    Email: $_POST[email]\n\n
    Phone: $_POST[phone]\n\n
    Address: $_POST[address] $_POST[city] $_POST[state]\n\n
    Solution For: $_POST[solution]\n\n
    Service : $_POST[service]";

    mail($recipient, $subject, $mailBody, "From: $_POST[first] $_POST[last] <$_POST[email]>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>