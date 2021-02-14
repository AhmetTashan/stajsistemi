<?php
ob_start();
session_start();
echo $sk=$_SESSION['kadi'];
echo $ss=$_SESSION['sifre'];
$dent=mysql_query( "select * from yonetim where k_adi='$sk' and k_sifre='$ss'");
$kontrol=mysql_num_rows($dent);

if($kontrol==1)
{
	echo'<meta http-equiv="refresh" content="0;URL=anasayfa.php">';
	 
}
else 
{ 
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kontrol</title>
<style type="text/css">
#bg{
	margin-left: auto;
	margin-top: auto;
	height: 290px;
	width: 570px;
	margin-right: auto;
	padding-top: 95px;
	background-image: url(../ogrenci/images/msj.png);
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;
	color: #C00;
	}
a:link {
	text-decoration: underline;
}
a:visited {
	text-decoration: underline;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: underline;
}
body {
	background-color: #FFF;
	margin-top: 100px;
	background-image: url(../ogrenci/images/bg.jpg);
}
</style>
</head>

<body bgcolor="#FFFFFF">
<div id="bg">
<?php
include('bag.php');
$kulanci_adi=$_POST['kullanci'];
$sifre=$_POST['sifre']; 

$sorgu=mysql_query( "select * from yonetim where k_adi='$kulanci_adi' and k_sifre='$sifre'");
$kontrol=mysql_num_rows($sorgu);

if($kontrol==1)
{
	
	 $_SESSION['kadi']=$kulanci_adi;
	$_SESSION['sifre']=$sifre;
	echo '<center><img src="../ogrenci/images/basarli.png" width="64" height="64" /></center></br>';
	echo '<div style=" color:#8ccf27; font-size:18px;text-align:center;">Giriş İşlemi Başarlı (Successful Login)</div></br>';
	echo '<div style="color:#8ccf27; font-size:11px;text-align:center;">Yönlendirliyorsunuz... </div>';
	echo '<meta http-equiv="refresh" content="3;URL=anasayfa.php">';
}
else 
{
	echo '<center><img src="../ogrenci/images/hata.png" width="64" height="64" /></center></br>';
	echo '<div style=" font-size:18px;text-align:center;">Giriş İşlemi Başarşız (Error During Exception)</div></br>';
	echo '<div style=" font-size:11px;text-align:center;">Yönlendirliyorsunuz... </div>';
	echo '<meta http-equiv="refresh" content="5;URL=../ogrenci/index.php">';
}
?>
</div>
</body>
</html>
<?php 
}
?>