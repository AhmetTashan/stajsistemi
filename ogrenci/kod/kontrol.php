<?php 
session_start();

$girilen_kod	= trim(strip_tags($_POST['gkod']));
$guvenlik_kodu	= trim(strip_tags($_SESSION['koruma']));

if($girilen_kod != $guvenlik_kodu)
	{
		echo 'y';
	}
	else
	{
		echo 'd';
	}
?>