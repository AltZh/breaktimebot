<?php
    header("Status: 301 Moved Permanently");
    header("Location: https://telebot.breaktime.kz/?". $_SERVER['QUERY_STRING']);
    exit;
?>
