<?php 

     error_reporting(0);	
	## Bağlantı Değişkenleri ##
	$host 	= "localhost";
	$user 	= "ilginmyo_user";
	$pass 	= "imyo123456";
	$db		= "ilginmyo_staj";
	
	## Mysql Bağlantısı ##
	$baglan = mysql_connect($host, $user, $pass) or die (mysql_error());
	
	## Veritabanı Seçimi ##
	mysql_select_db($db, $baglan) or die (mysql_error());
	
	## Karakter Sorunu ##
	mysql_query("SET CHARACTER SET 'utf8'");
	mysql_query("SET NAMES 'utf8'");


?>