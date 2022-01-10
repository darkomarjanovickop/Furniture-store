<?php
//Potreban je mail server (lokalni) koji bi slao mail-ove, kada je sajt online onda nije potreban.
$message_sent = false;
if (isset($_POST["name"]) && $_POST["name"] != "" && isset($_POST["email"]) && $_POST["email"] != "" && isset($_POST["subject"]) && $_POST["subject"] != "" && isset($_POST["message"]) && $_POST["message"] != "") {

    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $userName = $_POST["name"];
        $userEmail = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        $msg = wordwrap($message, 70);

        $to = "info@mnamestaj.com";
        $body = "";

        $body .= "From " . $userName . "\r\n";
        $body .= "Email " . $userEmail . "\r\n";
        $body .= "Message " . $msg . "\r\n";

        mail($to, $subject, $body);

        $message_sent = true;
    }
}
?>