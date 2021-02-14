<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
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
$adi=$ogr_adi;
$document = $PHPWord->loadTemplate('yapi.docx');


#Öğrenci Bilgileri
$document->setValue('ogr_tc',$ogr_tc);
$document->setValue('ogr_no', $ogr_no);
$document->setValue('ogr_adi', $ogr_adi);
$document->setValue('ogr_adres', $ogr_adres);
$document->setValue('ogr_mail',$ogr_mail);
$document->setValue('bolum',$ogr_bolum);
$document->setValue('sm',$ogr_sinif);
$document->setValue('ogr_adres', $ogr_adres);
$document->setValue('ogr_mail',$ogr_mail);
$document->setValue('ogr_bolum', $ogr_bolum);
$document->setValue('ogr_tur', $ogr_sinif);
#Bağmsız Değişkenler
$document->setValue('ogr_yil',$ogr_yil);



//
$document->setValue('yetkli',$is_yetkil);
$document->setValue('yetkiliadi',$is_yetkil);

$document->setValue('is_adres', $is_adres);
$document->setValue('is_tel', $is_tel);
$document->setValue('is_posta',$is_posta);
$document->setValue('is_b_tarih', $is_b_tarih);
$document->setValue('ogr_sinif', $ogr_sinif);
$document->setValue('ogr_adres', $ogr_adres);
$document->setValue('is_b_tarih',$is_b_tarih);
$document->setValue('is_bi_tarih',$is_bi_tarih);
$document->setValue('kurum', $is_kurum);
$document->save('d'.$ss.'.docx');

?>
</body>
</html>