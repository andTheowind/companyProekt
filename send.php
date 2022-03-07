<?php

$recepient = "info@proekt-sev.ru";
$sitename = "http://proekt-sev.ru/";
$remodeling = trim($_POST["remodeling"]);
$type = trim($_POST["type"]);
$size = trim($_POST["size"]);
$walls = trim($_POST["walls"]);
$phone = trim($_POST["phone"]);


$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Перепланировка: $remodeling \nТип помещения: $type \nПлощадь квартиры: $size  \nНесущие стены: $walls \nТелефон: $phone";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");