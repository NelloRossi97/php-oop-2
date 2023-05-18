<?php
include __DIR__ . '/../Models/Type.php';

$product1 = new Type('PRO-NUTRITION per Cani Adulti di Taglia Media', 'Crocchette PRO-NUTRITION Flazator Pure Life Senza Cereali per Cani Adulti di Taglia Media (10-30kg)', 78.99, 'https://static.zoomalia.com/prod_img/32991/la_810b6edc1cd1f36e45daf6d7824d7bb22831653638194.jpg', 2, 'Cibo', 'fa-solid fa-dog');
$product2 = new Type('Palle arcobaleno', 'Palle arcobaleno gatto (x4): - Palla di schiuma. - Venduta per 4. - Ø3,5 cm', 2.89, 'https://static.zoomalia.com/prod_img/34655/la_5427dcd340d84f762eba80aa538b0c527f71665126706.jpg', 3, 'Gioco', 'fa-solid fa-cat');

$products = [$product1, $product2];