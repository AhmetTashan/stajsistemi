<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ilgın Myo Staj Sistemi</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="msj/jquery.msgBox.js" type="text/javascript"></script>
<link href="msj/msgBoxLight.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php 
if(!empty($_GET['islem']))
{
require('bag.php');
$islem=$_GET['islem'];
switch($islem)
{
	
#Öğrenci Ekleme
case "ogr_e":

 $ogr_tc=htmlspecialchars(trim($_POST['tc_no']));
 $ogr_no=htmlspecialchars(trim($_POST['ogr_no']));
 $ogr_adi=htmlspecialchars(trim($_POST['ogr_adi']));
 $ogr_tel=htmlspecialchars(trim($_POST['ogr_tel']));
 $ogr_posta=htmlspecialchars(trim($_POST['ogr_posta']));
 $ogr_adres=htmlspecialchars(trim($_POST['ogr_adres']));
 $ogr_il=htmlspecialchars(trim($_POST['gil']));
 $ogr_ilce=htmlspecialchars(trim($_POST['ilce']));
 $bolum=htmlspecialchars(trim($_POST['ogr_bolum']));
 
 $bolumcek=mysql_query("Select * From bolumler Where bolum_id='$bolum'");
 
 while($bsatir = mysql_fetch_array($bolumcek))
 {
   $ogr_bolum=$bsatir[1];
 } 
 $ogr_danisman=htmlspecialchars($_POST['ogr_danisman']);
 $ogr_sinif=htmlspecialchars($_POST['ogr_sinif']);
 $ogr_ogretim=htmlspecialchars($_POST['ogr_ogretim']);


$sorgue="Insert Into ogr(tc_no,ogr_no,ogr_ad,ogr_tel,ogr_posta,ogr_adres,ogr_bolum,ogr_danisman,ogr_sinif,ogr_turu,onay,ogr_il,ogr_ilce) Values('$ogr_tc','$ogr_no','$ogr_adi','$ogr_tel','$ogr_posta','$ogr_adres','$ogr_bolum','$ogr_danisman','$ogr_sinif','$ogr_ogretim','b','$ogr_il','$ogr_ilce')";

 if(mysql_query($sorgue))
 {
	 
echo '
<script>				
	   $.msgBox({	
      title: "Bilgilendirme Mesajı",
      content: "Kayıt işlemi başarıyla gerçekleştirilmiştir. ",
      type: "alert",
      buttons: [{ value: "Tamam" }],
      success: function (result) {
        if (result == "Tamam") {
            window.location="index.php";;
        }
        }
       });		
   </script>';


 }
 
 else
  {
	  
	  echo '
	  
	  <script>				
	   $.msgBox({	
      title: "Bilgilendirme Mesajı",
      content: "Bir Hata Meydana Geldi Lütfen Tekra Deneyiniz",
      type: "confirm",
      buttons: [{ value: "Tamam" }],
      success: function (result) {
        if (result == "Tamam") {
            window.location="index.php";;
        }
        }
       });		
   </script>';
	 
 }

break;

#Staj1 Başvuru
case "sb1":

$tc=htmlspecialchars($_POST['ogr_tc']);
$syk=htmlspecialchars($_POST['syk']);
$ky=htmlspecialchars($_POST['ky']);
$sbt=htmlspecialchars($_POST['sbt']);
$sbtt=htmlspecialchars($_POST['sbtt']);
$kt=htmlspecialchars($_POST['kt']);
$kye=htmlspecialchars($_POST['kye']);
$ka=htmlspecialchars($_POST['ka']);
$il=htmlspecialchars($_POST['gil']);
$ilce=htmlspecialchars($_POST['ilce']);


 mysql_real_escape_string($sorgus="Insert Into staj(staj_turu,ogr_tc,is_kurum,is_adres,is_tel,is_posta,is_b_tarih,is_bi_tarih,is_yetkil,is_onay,is_not,durum,il,ilce) Values('1','$tc','$syk','$ka','$kt','$kye','$sbt','$sbtt','$ky','b','-1','k','$il','$ilce')");
if(mysql_query($sorgus))
 {
	 
	  echo '	  
	  <script>				
	   $.msgBox({	
      title: "Bilgilendirme Mesajı",
      content: "Staj 1 Başvurunuz Başarıyla Gerçekleşmiştir.",
     type: "alert",
      buttons: [{ value: "Tamam" }],
      success: function (result) {
        if (result == "Tamam") {
            window.location="anasayfa.php";;
        }
        }
       });		
   </script>';

 }
 else
 {
	 echo '
	  
	  <script>				
	   $.msgBox({	
      title: "Bilgilendirme Mesajı",
      content: "Bir Hatta Meydan Geldi Lütfen Tekra Deneyiniz",
      type: "confirm",
      buttons: [{ value: "Tamam" }],
      success: function (result) {
        if (result == "Tamam") {
            window.location="anasayfa.php";;
        }
        }
       });		
   </script>';
	 
 
	 

 }
break;

#Staj 2 Başvuru
case "sb2":

$tc=$_POST['ogr_tc'];
$syk=$_POST['syk'];
$ky=$_POST['ky'];
$sbt=$_POST['sbt'];
$sbtt=$_POST['sbtt'];
$kt=$_POST['kt'];
$kye=$_POST['kye'];
$ka=$_POST['ka'];

$sorgus="Insert Into staj(staj_turu,ogr_tc,is_kurum,is_adres,is_tel,is_posta,is_b_tarih,is_bi_tarih,is_yetkil,is_onay,is_not,durum) Values('2','$tc','$syk','$ka','$kt','$kye','$sbt','$sbtt','$ky','b','-1','k')";

if(mysql_query($sorgus))
 {
	 

 }
 break;
 
 #Staj1 Güncelleme
 case "gun1":
 
  $tc=$_POST['ogr_tc'];
  $syk=$_POST['syk'];
  $ky=$_POST['ky'];
  $sbt=$_POST['sbt'];
  $sbtt=$_POST['sbtt'];
  $kt=$_POST['kt'];
  $kye=$_POST['kye'];
  $ka=$_POST['ka'];
  
$sorgu="Update staj Set is_kurum='$syk' , is_adres='$ka' ,is_tel='$kt',is_posta='$kye',is_b_tarih='$sbt',is_bi_tarih='$sbtt',is_yetkil='$ky' Where staj_turu='1' and ogr_tc='$tc'";
  
if(mysql_query($sorgu))
 {
	 
 echo '	  
	  <script>				
	   $.msgBox({	
      title: "Bilgilendirme Mesajı",
      content: "Bilgileriniz Başarlı Bir Şekilde Güncellendi",
     type: "alert",
      buttons: [{ value: "Tamam" }],
      success: function (result) {
        if (result == "Tamam") {
            window.location="anasayfa.php";;
        }
        }
       });		
   </script>';
 }
 else
 {
		   
	echo'  <script>				
	   $.msgBox({	
      title: "Bilgilendirme Mesajı",
      content: "Bir Hata Meydana Geldi Lütfen Tekrar Deneyiniz",
      type: "confirm",
      buttons: [{ value: "Tamam" }],
      success: function (result) {
        if (result == "Tamam") {
            window.location="anasayfa.php";;
        }
        }
       });		
   </script>';	
 
 }
  
  
break;
#Staj 2 Güncelleme
 case "gun2":
 
  $tc=$_POST['ogr_tc'];
  $syk=$_POST['syk'];
  $ky=$_POST['ky'];
  $sbt=$_POST['sbt'];
  $sbtt=$_POST['sbtt'];
  $kt=$_POST['kt'];
  $kye=$_POST['kye'];
  $ka=$_POST['ka'];
$sorgu="Update Staj Set is_kurum='$syk' , is_adres='$ka' ,is_tel='$kt',is_posta='$kye',is_b_tarih='$sbt',is_bi_tarih='$sbtt',is_yetkil='$ky' Where staj_turu='2' and ogr_tc='$tc'";
  
if(mysql_query($sorgu))
 {
 echo '	  
	  <script>				
	   $.msgBox({	
      title: "Bilgilendirme Mesajı",
      content: "Bilgileriniz Başarlı Bir Şekilde Güncellendi",
     type: "alert",
      buttons: [{ value: "Tamam" }],
      success: function (result) {
        if (result == "Tamam") {
            window.location="anasayfa.php";;
        }
        }
       });		
   </script>';
 }
 else
 {
	 echo'  <script>				
	   $.msgBox({	
      title: "Bilgilendirme Mesajı",
      content: "Bir Hatta Meydan Geldi Lütfen Tekra Deneyiniz",
      type: "confirm",
      buttons: [{ value: "Tamam" }],
      success: function (result) {
        if (result == "Tamam") {
            window.location="anasayfa.php";;
        }
        }
       });		
   </script>';	
 }
  
  
break;

}	
}


?>
</body>
</html>
