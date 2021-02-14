<?php
 ob_start();
 session_start();
 $sk=$_SESSION['ogr_tc'];
 $ss=$_SESSION['ogr_no'];
 include('bag.php');

switch($ogr_tur)
{
	case 1:
	 echo'<div id="f" style="left: 52px; top: 310px;"> <img src="formlar/onay.png" width="15" height="15" /></div>';break;
	 case 2:
echo '<div id="f" style="left: 52px; top: 334px;"> <img src="formlar/onay.png" width="15" height="15" /></div>'; break;

	
	} ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>

<?php include('../bag.php');

$ogr_tc=$_GET['tc'];


$sorgu=mysql_query("Select * From ogr Where tc_no='$sk'");
while($satir = mysql_fetch_array($sorgu))
     { 
	    $ogr_tc= $satir[0];
		$ogr_no= $satir[1];
		$ogr_yil=substr($ogr_no,0,2);
		$ogr_adi= $satir[2];
		$ogr_tel=$satir[3];
		$ogr_adres=$satir[5];
		$ogr_mail=$satir[4];
		$ogr_bolum=$satir[6];
		$ogr_sinif=$satir[8];
		$ogr_tur=$satir[9];
	 
	 }
	 
$sorgus=mysql_query("Select * From staj Where ogr_tc=$sk and staj_turu=1");
while($satirs = mysql_fetch_array($sorgus))
     { 
	    $is_kurum= $satirs[2];
		$is_adres= $satirs[3];
		$is_tel= $satirs[4];
		$is_posta=$satirs[5];
		$is_bi_tarih=$satirs[7];
		$is_yetkil=$satirs[8];
		$is_b_tarih=$satirs[6];
		
	 
	 }


?>

</body>
</html>
