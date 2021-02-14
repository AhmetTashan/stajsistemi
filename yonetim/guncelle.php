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
include('bag.php');
$gdurum=$_GET['durum'];
switch($gdurum)
{
	case "d":
	    $sicil=$_POST['s_no'];
        $adi=$_POST['adi'];
        $bolum=$_POST['bolum'];
		$sifre=$_POST['sifre'];
		$posta=$_POST['posta'];	
$sorgug=mysql_query("UPDATE danisman SET dadi_soyadi='$adi' ,d_bolum='$bolum' ,d_sifre='$sifre', e_posta='$posta' WHERE  dsicil_no='$sicil'"); 
echo '<meta http-equiv="refresh" content="0;URL=anasayfa.php">';
break;

	
	case "b":
	    $b_no=$_POST['b_no'];
        $b_adi=$_POST['b_adi'];
		echo $b_no.$b_adi;
        $sorgug=mysql_query("UPDATE bolumler SET bolum_id='$b_no', bolum_adi='$b_adi' WHERE bolum_id='$b_no'"); 
		echo '<meta http-equiv="refresh" content="0;URL=bolumler.php">';
	break;
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