<?php
session_start();
$sayi1 = rand(0,25);
$sayi2 = rand(0,25);
$_SESSION["toplamasorusu"] = ($sayi1 + $sayi2);
echo "$sayi1 + $sayi2";
?>
