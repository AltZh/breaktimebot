<?php
    header("Status: 301 Moved Permanently");
    header("Location: http://telebot.breaktime.kz/?". $_SERVER['QUERY_STRING']);
    exit;
?>
