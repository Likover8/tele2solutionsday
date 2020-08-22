<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];


$apiToken = "1171925894:AAGZ_BuDaZqerH1-kWYr1YNGIJor8wgKFY4";
$data = [
   'chat_id' => '@check_trans',
   'text' => $name . " " . $phone . " " . $email];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
?>