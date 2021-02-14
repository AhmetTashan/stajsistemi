<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">
.tr {
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #333;
}
.tr td {
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #333;
}
</style>
</head>

<body>
<?php include('bag.php');

$ogr_tc=$_GET['tc'];
$sorgu=mysql_query("Select * From ogr Where tc_no='$ogr_tc'");
while($satir = mysql_fetch_array($sorgu))
     { 
	    $ogr_tc= $satir[0];
		$ogr_no= $satir[1];
		$ogr_adi= $satir[2];
		$ogr_tel=$satir[3];
		$ogr_adres=$satir[11]." ".$satir[12]." ".$satir[5];
		$ogr_mail=$satir[4];
		$ogr_bolum=$satir[6];
		$ogr_sinif=$satir[8];
		$ogr_tur=$satir[9];
	 
	 }
	 
	 $sorgus=mysql_query("Select * From staj Where ogr_tc=$ogr_tc and staj_turu=1");
while($satirs = mysql_fetch_array($sorgus))
     { 
	    $is_kurum= $satirs[2];
		$is_adres=$satirs[14]."  ". $satirs[15]."  ".$satirs[3];
		$is_tel= $satirs[4];
		$is_posta=$satirs[5];
		$is_b_tarih=$satirs[6];
		$is_bi_tarih=$satirs[7];
		$is_yetkil=$satirs[8];
	
		
	 
	 }


?>






<table width="628" border="0" align="center" cellspacing="15" style=" font-family:Arial, Helvetica, sans-serif">
  <tr class="tr">
    <td>Öğrenci TC No</td>
    <td>&nbsp;</td>
    <td><?php echo $ogr_tc; ?></td>
  </tr>
  <tr class="tr">
    <td width="144">Öğrenci No</td>
    <td width="22">:</td>
    <td width="407"><?php echo  $ogr_no;?></td>
  </tr>
  <tr class="tr">
    <td>Öğrenci Adi Soyadi</td>
    <td>:</td>
    <td><?php echo $ogr_adi;?></td>
  </tr>
  <tr>
    <td><span class="tr">Öğrenci Tel </span></td>
    <td class="tr"><span class="tr">:</span></td>
    <td class="tr"><?php echo $ogr_tel; ?></td>
  </tr>
  <tr>
    <td><span class="tr">Öğrenci Adres</span></td>
    <td class="tr"><span class="tr">:</span></td>
    <td class="tr"><?php echo $ogr_adres;; ?></td>
  </tr>
  <tr>
    <td><span class="tr">Öğrenci E-Posta</span></td>
    <td class="tr"><span class="tr">:</span></td>
    <td class="tr"><?php echo $ogr_mail; ?></td>
  </tr>
  <tr>
    <td><span class="tr">Öğrenci Bölüm</span></td>
    <td class="tr"><span class="tr">:</span></td>
    <td class="tr"><?php echo $ogr_bolum;?></td>
  </tr>
  <tr>
    <td><span class="tr">Öğrenci Sınıf</span></td>
    <td class="tr"><span class="tr">:</span></td>
    <td class="tr"><?php echo $ogr_sinif;?></td>
  </tr>
  <tr>
    <td><span class="tr">Öğretim Türü</span></td>
    <td class="tr"><span class="tr">:</span></td>
    <td class="tr"><?php echo $ogr_tur.".Öğretim";?></td>
  </tr>
  <tr>
    <td><span class="tr">Staj Yapılcak Kurum</span></td>
    <td class="tr"><span class="tr">:</span></td>
    <td class="tr"><?php echo $is_kurum; ?></td>
  </tr>
  <tr>
    <td><span class="tr">Kurum Adresi</span></td>
    <td class="tr"><span class="tr">:</span></td>
    <td class="tr"><?php echo $is_adres; ?></td>
  </tr>
  <tr>
    <td><span class="tr">Kurumu Tel</span></td>
    <td class="tr"><span class="tr">:</span></td>
    <td class="tr"><?php echo $is_tel; ?></td>
  </tr>
  <tr>
    <td><span class="tr">Kurum E-Posta</span></td>
    <td class="tr"><span class="tr">:</span></td>
    <td class="tr"><?php echo $is_posta;?></td>
  </tr>
  <tr>
    <td><span class="tr">Kurum Yetkilisi</span></td>
    <td class="tr"><span class="tr">:</span></td>
    <td class="tr"><?php echo $is_yetkil; ?></td>
  </tr>
  <tr>
    <td><span class="tr">Staj Başlangıç Tarhi</span></td>
    <td class="tr"><span class="tr">:</span></td>
    <td class="tr"><?php echo $is_b_tarih; ?></td>
  </tr>
  <tr>
    <td><span class="tr">Staj Bittiş Tarhi</span></td>
    <td class="tr"><span class="tr">:</span></td>
    <td class="tr"><?php echo $is_bi_tarih; ?></td>
  </tr>
</table>
</body>
</html>
