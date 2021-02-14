<?php
include('bag.php');
ob_start();
session_start();
 $sk=$_SESSION['kadi'];
 $ss=$_SESSION['sifre'];
$dent=mysql_query( "select * from yonetim where k_adi='$sk' and k_sifre='$ss'");
$kontrol=mysql_num_rows($dent);

if($kontrol==1)
{
	?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php 
include("bag.php");

if(isset($_GET['bil']))
{
	$bil=$_GET['bil'];
	$sil=mysql_query("DELETE  FROM danisman Where dsicil_no=$bil");
	echo '<meta http-equiv="refresh" content="0;URL=anasayfa.php">';
 }
if(isset($_POST['s_no']))
{
$sicil=$_POST['s_no'];
$adi=$_POST['adi'];
$bolum=$_POST['bolum'];
$sifre=$_POST['sifre'];
$posta=$_POST['posta'];
$sorgu=mysql_query("insert into danisman(dsicil_no,dadi_soyadi,d_bolum,d_sifre,e_posta) Values('$sicil','$adi','$bolum','$sifre','$posta')");
echo '<meta http-equiv="refresh" content="0;URL=anasayfa.php">';
}

?>
</body>
</html>
<?php 
}else 
{
	echo '<meta http-equiv="refresh" content="0;URL=index.php">';
}

?>