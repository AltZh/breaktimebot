<?php
$apiToken = "912350444:AAEXnwyIEONMxMYRkS9QSN8hnnJF8qVL58o";

$data = [
    'chat_id' => '780805049',
    'text' => $_GET['text'];
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
// Do what you want with result
?>
