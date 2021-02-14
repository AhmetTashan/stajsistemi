<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>İşlemler</title>
 <script src="js/jquery-1.8.3.js"></script>

<script src="msj/jquery.msgBox.js" type="text/javascript"></script>
<link href="msj/msgBoxLight.css" rel="stylesheet" type="text/css" />

</head>

<body>

<?php

function mesaj($turu,$msjm,$yonledirme)
{
	echo '
       <script>				
	   $.msgBox({	
      title: "Bilgilendirme Mesajı",
      content: "'.$msjm.'",
      type: "'.$turu.'",
      buttons: [{ value: "Tamam" }],
      success: function (result) {
        if (result == "Tamam") {
            window.location="'.$yonledirme.'.php";;
        }
        }
       });		
    </script>';
   
}

  ob_start();
  session_start();
 $dsk=$_SESSION['dkadi'];
 $dss=$_SESSION['dsifre'];
 include('bag.php');
$dent=mysql_query( "select * from danisman where  dsicil_no='$dsk' and d_sifre='$dss'");
 while($satirdb = mysql_fetch_array($dent))
    {

	$dan_posta=$satirdb[4];
	
		
    }

$kontrol=mysql_num_rows($dent);

if($kontrol==1)
{?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>İşleniyor..</title>
</head>
<body>
<?php 
if(!empty($_GET['islem']))
{
require('bag.php');
 $islem=$_GET['islem'];
 $tc_no=$_GET['o_tc'];
 $ogr_posta=$_GET['posta'];
 $ogr_adi=$_GET['ad'];
switch($islem)
{	

##Staj Onay ################################################################################################################################
case "o":
#-------------------------------------------------------------Sorgu------------------------------------------------------------

#----------------------------------------------------------Mail Gönderme-------------------------------------------------------


$gonder_isim="S.Ü. Ilgın Meslek Yüksekokulu Staj Bilgi Sistemi";
 $gonder_mail=$dan_posta;
 $alan_isim=$ogr_adi;
 $alan_mail=$ogr_posta;
$baslik="Staj Bilgi Sistemi";
$mesaj="Sayın, ".$alan_isim."
Staj Bilgi Sistemine yaptığınız başvuru danışmanınız tarafından onaylanmıştır. Öğrenci nuamaranız ve TC Kimlik Numaranız aracılığı ile sisteme giriş yapabilir ve Staj bilgilerinizi güncelleyebilirsiniz.
Bu e-posta Staj Bilgi Sistemi tarafından otomatik olarak gönderilmiştir.
İyi Günler Dileriz..."; 
$mailtanim = "MIME-Version: 1.0\r\n"; // bu kısım tanımlama kısmı
$mailtanim .= "Content-type: text/plain; charset=utf-8\r\n";
$mailtanim .= "From: $gonder_isim <$gonder_mail>\r\n";
$mailtanim .= "Reply-To: $gonder_isim <$gonder_mail>\r\n";
#--------------------------------------------------------------Mail Kontrol ----------------------------------------------------------------------


if(mail($alan_mail,$baslik,stripslashes($mesaj),$mailtanim))
{
$sorgug=mysql_query("UPDATE ogr SET onay='o' WHERE tc_no='$tc_no'");


 mesaj("ok","Başarıyla Onaylanmıştır. :)","onaybekliyen");
//echo '<script  type="text/javascript"> alert("Başarlı Onaylama"); //script>';
//echo '<meta http-equiv="refresh" content="0;URL=onaybekliyen.php">';
}

else
{
	mesaj("error","Bir Hata Meydana Geldi :(","onaybekliyen");
	
}








break;
##########################################################Staj Red###############################################################################

case "r":

$gonder_isim="S.Ü. Ilgın Meslek Yüksekokulu Staj Bilgi Sistemi";
$gonder_mail=$dan_posta;
$alan_isim=$ogr_adi;
$alan_mail=$ogr_posta;
$baslik="Staj Bilgi Sistemi";
$mesaj="Sayın, ".$alan_isim."
Staj Bilgi Sistemine yaptığınız başvuru danışman seçiminizin hatalı olması sebebiyle reddedilmişir. Danışman bilginizi kontrol ederek sisteme tekrar kayıt olmanız gerekmektedir. 
Bu e-posta Staj Bilgi Sistemi tarafından otomatik olarak gönderilmiştir.
İyi Günler Dileriz...";
$mailtanim = "MIME-Version: 1.0\r\n"; // bu kısım tanımlama kısmı
$mailtanim .= "Content-type: text/plain; charset=utf-8\r\n";
$mailtanim .= "From: $gonder_isim <$gonder_mail>\r\n";
$mailtanim .= "Reply-To: $gonder_isim <$gonder_mail>\r\n";

#--------------------------------------------------------------Mail Kontrol----------------------------------------------------------------------


if(mail($alan_mail,$baslik,stripslashes($mesaj),$mailtanim))
{
$sorgug=mysql_query("Delete From ogr Where tc_no='$tc_no'");
mesaj("ok","Başvuru Red Edildi.","onaybekliyen");

}

else
{
	mesaj("error","Bir Hata Meydan Geldi :(","onaybekliyen");

}





break;
##########################################################Staj Red###############################################################################


case "s1":
  $alan_isim=$ogr_adi;
 $alan_mail=$ogr_posta;
$gonder_isim="S.Ü. Ilgın Meslek Yüksekokulu Staj Bilgi Sistemi";
$gonder_mail=$dan_posta;
$baslik="Staj Bilgi Sistemi";
 $mesaj="Sayın, ".$alan_isim."
Staj Bilgi Sistemine yaptığınız Staj 1 başvurunuz danışmanınız tarafından onaylanmıştır. 
Bu e-posta Staj Bilgi Sistemi tarafından otomatik olarak gönderilmiştir.
İyi Günler Dileriz..."; 

$mailtanim = "MIME-Version: 1.0\r\n"; // bu kısım tanımlama kısmı
$mailtanim .= "Content-type: text/plain; charset=utf-8\r\n";
$mailtanim .= "From: $gonder_isim <$gonder_mail>\r\n";
$mailtanim .= "Reply-To: $gonder_isim <$gonder_mail>\r\n";
if(mail($alan_mail,$baslik,stripslashes($mesaj),$mailtanim))
{
	
$sorgul=mysql_query("UPDATE staj SET is_onay='o' WHERE ogr_tc='$tc_no' and staj_turu='1'");
if($sorgul)
{
mesaj("ok","Staj1 Başvurusu Onaylanmıştır","staj1");
	
}
else
{
	mesaj("error","Staj Başvuru Onayında Bir Hata Meydan Geldi");
}

}
else
{
	mesaj('error','Mail Gönderiminde Bir Hata Meydan Geldi','staj1');
}

break;




case "sifre":
$yeni=$_POST['sifre'];
if($sorgug=mysql_query("UPDATE danisman SET d_sifre='$yeni' WHERE dsicil_no='$dsk'")) 
{
	mesaj('ok','Şifreniz Başarlı Bir Şekilde Güncellenmiştir.','anasayfa');
	//echo '<meta http-equiv="refresh" content="0;URL=anasayfa.php">';
	//echo '<script  type="text/javascript"> alert("Şifreniz Başarlı Bir Şekilde Değiştirlmiştir.")/script>

	
}


 break;

case "red1":

$neden=$_POST['neden'];
$tc=$_POST['tc'];
$alan_mail=$_POST['email'];
$alan_isim=$_POST['ogradi'];
$gonder_isim="S.Ü. Ilgın Meslek Yüksekokulu Staj Bilgi Sistemi";
$gonder_mail=$dan_posta;
$baslik="Staj Bilgi Sistemi"; 
if($neden==1)
{
$mesaj="Sayın, ".$alan_isim."
Staj Bilgi Sistemine yaptığınız Staj 1 başvurunuz danışmanınız tarafından, STAJ YAPACAĞINIZ KURUMUN UYGUN BULUNMAMASI sebebiyle onaylanmamıştır. Danışmanınızla iletişime geçerek daha uygun bir kurum belirlemeniz gerekmektedir.
Bu e-posta Staj Bilgi Sistemi tarafından otomatik olarak gönderilmiştir.
İyi Günler Dileriz...";

}
if($neden==2)
{
 $mesaj="Sayın, ".$alan_isim."
Staj Bilgi Sistemine yaptığınız Staj 1 başvurunuz danışmanınız tarafından, STAJ YAPACAĞINIZ TARİHLERİN UYGUN BULUNMAMASI sebebiyle onaylanmamıştır. Danışmanınızla iletişime geçerek daha uygun bir kurum belirlemeniz gerekmektedir.
Bu e-posta Staj Bilgi Sistemi tarafından otomatik olarak gönderilmiştir.
İyi Günler Dileriz..."; 

}
$mailtanim = "MIME-Version: 1.0\r\n"; // bu kısım tanımlama kısmı
$mailtanim .= "Content-type: text/plain; charset=utf-8\r\n";
$mailtanim .= "From: $gonder_isim <$gonder_mail>\r\n";
$mailtanim .= "Reply-To: $gonder_isim <$gonder_mail>\r\n";
if(mail($alan_mail,$baslik,stripslashes($mesaj),$mailtanim))
{
	$sorgul=mysql_query("UPDATE staj SET is_onay='r' WHERE ogr_tc='$tc_no' and staj_turu='1'");
	mesaj('ok','Staj1 Başvurusu Red Edildi.','staj1');
	
}

else
{
	mesaj('error','Bir Hata Meydana Geldi','staj1');
}




break;





}

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

</body>
</html>
