<?php
  ob_start();
  session_start();
  include('bag.php');
 $dsk=$_SESSION['dkadi'];
 $dss=$_SESSION['dsifre'];
 $dent=mysql_query( "select * from danisman where  dsicil_no='$dsk' and d_sifre='$dss'");
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

<body>
<div id="bg">
<?php
include('bag.php');
$dkulanci_adi= $_POST['dkullanci'];
 $dsifre=$_POST['dsifre']; 

$sorgu=mysql_query( "select * from danisman where dsicil_no='$dkulanci_adi' and d_sifre='$dsifre'");
$kontrol=mysql_num_rows($sorgu);

if($kontrol==1)
{
	
	 $_SESSION['dkadi']=$dkulanci_adi;
	$_SESSION['dsifre']=$dsifre;
echo '<center><img src="images/basarli.png" width="64" height="64" /></center></br>';
	echo '<div style=" color:#8ccf27; font-size:18px;text-align:center;">Giriş İşlemi Başarlı </div></br>';
	echo '<div style="color:#8ccf27; font-size:11px;text-align:center;">Yönlendirliyorsunuz... </div>';
	echo '<meta http-equiv="refresh" content="3;URL=anasayfa.php">';
	
	
}
else 
{
	echo '<center><img src="images/hata.png" width="64" height="64" /></center></br>';
	echo '<div style=" font-size:18px;text-align:center;">Giriş İşlemi Başarşız </div></br>';
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