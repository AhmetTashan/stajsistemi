<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
<?php
 ob_start();
 session_start();
 $sk=$_SESSION['ogr_tc'];
 $ss=$_SESSION['ogr_no'];
 include('bag.php');
 require_once 'bilgi.php';
 require_once '../PHPWord.php';
 $PHPWord = new PHPWord();

$document = $PHPWord->loadTemplate('formlar.docx');

echo $yil=(date("Y")-1)."/".date("Y");
$ogr_tarih=date("d/m/Y");
#Öğrenci Bilgileri
$document->deger('tarih',$ogr_tarih);
$document->deger('ogr_tc',$ogr_tc);
$document->deger('no', $ogr_no);
$document->deger('adi', $ogr_adi);
$document->deger('ogr_adres', $ogr_adres);
$document->deger('ogr_mail',$ogr_mail);
$document->deger('bolum',$ogr_bolum);
$document->deger('ada',$ogr_sinif);
$document->deger('ogr_adres', $ogr_adres);
$document->deger('ogr_mail',$ogr_mail);
$document->deger('ogr_bolum', $ogr_bolum);
$document->deger('ogr_tur', $ogr_sinif);
$document->deger('ogr_yil',$ogr_yil);
$document->deger('yil',$yil);

$document->deger('yet',$is_yetkil);
$document->deger('is_adres', $is_adres);
$document->deger('tel', $is_tel);
$document->deger('posta',$is_posta);
$document->deger('is_b_tarih', $is_b_tarih);
$document->deger('ogr_sinif', $ogr_sinif);
$document->deger('aba', $ogr_adres);
$document->deger('is_b_tarih',$is_b_tarih);
$document->deger('is_bi_tarih',$is_bi_tarih);
$document->deger('kurum', $is_kurum);
$document->save($ss.'.docx');


?>
</body>
</html>