<?php
 ob_start();
 session_start();
 $sk=$_SESSION['ogr_tc'];
 $ss=$_SESSION['ogr_no'];
 include('bag.php');
$dent=mysql_query( "select * from  ogr where tc_no='$sk' and ogr_no='$ss'");
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
<title>Başlıksız Belge</title>
<style type="text/css">
#bg{
	margin-left: auto;
	margin-top: auto;
	height: 290px;
	width: 570px;
	margin-right: auto;
	padding-top: 95px;
	background-image: url(images/msj.png);
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
	background-image: url(images/bg.jpg);
}
</style>
</head>

<body>
<div id="bg">
<?php

 $ogr_tc=$_POST['ogr_tc'];
 $ogr_no=$_POST['ogr_no']; 

$sorgu=mysql_query( "select * from ogr where tc_no='$ogr_tc' and ogr_no='$ogr_no' and onay='o'");
$kontrol=mysql_num_rows($sorgu);

if($kontrol==1)
{
	
	$_SESSION['ogr_tc']=$ogr_tc;
	$_SESSION['ogr_no']=$ogr_no;
	echo '<center><img src="images/basarli.png" width="64" height="64" /></center></br>';
	echo '<div style=" color:#8ccf27; font-size:18px;text-align:center;">Giriş İşlemi Başarlı</div></br>';
	echo '<div style="color:#8ccf27; font-size:11px;text-align:center;">Yönlendirliyorsunuz... </div>';
	echo '<meta http-equiv="refresh" content="5;URL=anasayfa.php">';
}
else 
{
	
	echo '<center><img src="images/hata.png" width="64" height="64" /></center></br>';
	echo '<div style=" font-size:18px;text-align:center;">Giriş İşlemi Başarşız</div></br>';
	echo '<div style=" font-size:11px;text-align:center;">Yönlendirliyorsunuz... </div>';
	echo '<meta http-equiv="refresh" content="5;URL=index.php">';
}
?>
</div>
</body>
</html>
<?php 
}
?>