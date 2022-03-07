<?php

$recepient = "info@proekt-sev.ru";
$sitename = "http://proekt-sev.ru/";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);


$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nТелефон: $phone";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");