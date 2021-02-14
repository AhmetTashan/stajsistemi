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
$ogr_tcs=$_SESSION['ogr_tc'];
$sorguc=mysql_query("select * from ogr where tc_no='$ogr_tcs'");

	 while($satirc = mysql_fetch_array($sorguc))
     {
		 $ogr_tc=$satirc[0];
		 $ogr_no=$satirc[1];
		 $ogr_adi=$satirc[2];
		 $ogr_tel=$satirc[3];
		 $ogr_e_pos=$satirc[4];
	 }
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

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Ilgın Myo Staj Sistemi</title>
    <meta name="description" content="Ilgın Myo,Staj Sistemi,Staj,Taner,Taner Özel" />
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
    <script src="js/jquery-1.8.3.js"></script>
   <script src="js/jquery-ui.js"></script>
	<link rel="stylesheet" href="css/style.css" />
    
    <script>
	
	$(document).ready(function() {
		
  $("#tarih").datepicker(
                     {
    onSelect: function()
    { 
        var baslangic =$("input[name='sbt']").val().replace('.','').replace('.','');		
        var bittis=$("input[name='sbtt']").val().replace('.','').replace('.','');
		if(baslangic=='')
		    {
              $("input[name='sbtt']").val(' ');	
			  
	$.msgBox({	
      title: "Bilgilendirme Mesajı",
      content: "Staj Başlangıç Tarihini seçmeden , Bittiş Tarihini seçemesiniz",
      type: "error",
      buttons: [{ value: "Tamam" }],
      
             });
			  
			  
			  
			 
		    }
			
		 if(baslangic>=bittis)
		    {
			
			$.msgBox({	
      title: "Bilgilendirme Mesajı",
      content: "Staj bittiş tarihi , başlangıç tarhi öncesinde olamaz",
      type: "error",
      buttons: [{ value: "Tamam" }],
      
             });
			$("input[name='sbtt']").val(' ');
		    }
		
    }
});

});
	
	
	
	
	</script>
	<script type="text/javascript">
	$(function() {
    $("#datepicker" ).datepicker();
	$("#tarih" ).datepicker();
    });
  </script>
  
	<script>

 function listela()
	 {
		
		var bolum=$("Select[name=il]" ).text(function(){
			
			ill=$(this).find("option:selected").text();
			
			$('#gil').val(ill);
			});
			
			var lsm=$("Select[name=il]" ).val();
		    var degerler="il="+lsm;
		
			
   



           
		$.ajax({	
		   type:"post",
	       url:"listele.php",
	       data:degerler,
	      success: function(sonuc)
	      {
			
		     $("#ilce").html(sonuc);
				
	      }
		
	 })
		
	 }
</script>

     <script src="msj/jquery.msgBox.js" type="text/javascript"></script>
<link href="msj/msgBoxLight.css" rel="stylesheet" type="text/css" />

</head>
<body>

<!-- Content -->
<div id="content">

	<!-- Header -->
  <!--#Header -->	
		
		<!-- Login -->
  <div id="mainLogin">
	  <div class="form" style="float: right; width: 350px; padding-left: 10px">
	    <?php $getri=$_GET['icerik'];
		switch($getri)
		{
			
			
			case "sb1":
			$sb1h=mysql_query("Select * From staj Where ogr_tc='$ogr_tc'  and durum='k'");
	
			if(mysql_fetch_array($sb1h) )
			{
		
		
	     	mesaj("error","Dahha Önceden Staj1 Başvurunuz Yapılmıştır.","anasayfa");
				
				
				
			}
			else
			{
				
				require_once('sb1.php'); 
				
			}					
			break;
			
			case "sb2":
		
			
			$sorgu=mysql_query("Select * From staj Where  ogr_tc='$ogr_tc' and is_onay='b' and staj_turu='2'");
			if(!mysql_affected_rows )
			{
				require_once('sb2.php'); 
			}
			else
			{
				
				mesaj("error","Dahha Önceden Staj2 Başvurunuz Yapılmıştır.","anasayfa");
				
		
				
			}		
		
			break;
			
			
			case "sb1g":
			require_once('sb1.php'); break;
			case "gun1":
			
			 $dr=mysql_query( "select * from staj where  ogr_tc='$ogr_tc' and is_onay='b' and staj_turu='1'");
             $durum=mysql_num_rows($dr);
		     if($durum==1)
             {
				   
				   include('gun1.php');
				   
             }
			   else
			   {
				   
  	mesaj("error","Staj Başvurusunda Bulunmadan , Bilgilerinizi Güncelleştiremezsiniz.","anasayfa");

			  }
			  break;
			  
			  case "gun2":
			
			$dr=mysql_query( "select * from staj where  ogr_tc='$ogr_tc' and is_onay='b' and staj_turu='2'");
             $durum=mysql_num_rows($dr);
		   if($durum==1)
               {
				   
				   require_once('gun2.php');
				   
               }
			   else
			   {
				     	mesaj("error","Staj Başvurusunda Bulunmadan , Bilgilerinizi Güncelleştiremezsiniz.","anasayfa");

			  }
			  
			  break;
			  
			  case "defter1":
			 $defter1izle=$sayidefter1 =@mysql_num_rows(@mysql_query("select * from staj where  ogr_tc='$ogr_tc' and is_onay='o' and staj_turu='1'"));
			if($defter1izle >=1)
			{
			$durumdefter=1;
			  require_once("defter1.php");
			  
			 
			}
			else 
			{
				mesaj("error","Staj Defteriniz Yükleyebilmeniz İçin  Danışmanızdan Onay Almalısnız.","anasayfa");
			}
			  break;
			  
			  
			   case "formlar1":
			   $durumdefter=1;
			   $formlar1=$sayiformlar1 =@mysql_num_rows(@mysql_query("select * from staj where  ogr_tc='$ogr_tc' and is_onay='b' and staj_turu='1'"));
			if($formlar1 >=1)
			{
			
			$durumdefter=0;
			}
			  require_once("formlar1.php");
			
			
			  
			  break;
			  
			default:
			require_once('vars.php');
		}
		
		?>
			
	  </div>
	
	<div style="float: left; width: 200px; margin-left:15px;">
	  <div class="form">
		   <h2><a href="anasayfa.php"><span style="position: relative; top: -2px; margin-right: 5px; display: inline">»</span>Anasayfa</a> </h2>
		   <p>           
		   <p>           
	    <div id="login" class="margin">
        <?php
		$sorgugizlee=$sayi =@mysql_num_rows(@mysql_query("Select * From staj Where  ogr_tc='$ogr_tc' and staj_turu='1' and is_not NOT IN ('-1','','0')"));
			if($sorgugizlee >=1)
			{
				
		
			}
			else 
			{
		?>
        
	      <h3 class="title">Staj 1 İşlemleri</h3>
		<ul class="profil-link">
			<li><a href="anasayfa.php?icerik=sb1"><span style="position: relative; top: -2px; margin-right: 5px; display: inline">»</span> Staj Başvurusu</a></li>
			<li><a href="anasayfa.php?icerik=gun1"><span style="position: relative; top: -2px; margin-right: 5px; display: inline">»</span>Bilgi Güncelleme</a></li>
            <li><a href="anasayfa.php?icerik=formlar1"><span style="position: relative; top: -2px; margin-right: 5px; display: inline">»</span>Gerekli Formlar</a></li>
             <li><a href="anasayfa.php?icerik=defter1"><span style="position: relative; top: -2px; margin-right: 5px; display: inline">»</span>Online Defter Gönderimi</a></li>
		</ul>
        
        <?php
			}
		$sorgugizle=$sayi =@mysql_num_rows(@mysql_query("Select * From ogr Where  tc_no='$ogr_tc' and ogr_sinif NOT IN ('1-A','1-B')"));
			if($sorgugizle >=1)
			{
				
		
		
		?>
          <h3 class="title">Staj 2 İşlemleri</h3>
          <ul class="profil-link">
			<li><a href="anasayfa.php?icerik=sb2"><span style="position: relative; top: -2px; margin-right: 5px; display: inline">»</span> Staj Başvurusu</a></li>
			<li><a href="anasayfa.php?icerik=gun2"><span style="position: relative; top: -2px; margin-right: 5px; display: inline">»</span>Bilgi Güncelleme</a></li>
            <li><a href="formlar2.php"><span style="position: relative; top: -2px; margin-right: 5px; display: inline">»</span>GerkliFormlar</a></li>
              <li><a href="anasayfa.php?icerik=defter2"><span style="position: relative; top: -2px; margin-right: 5px; display: inline">»</span>Online Defter Gönderimi</a></li>
		</ul>
       <?php 
	   
			}?>
	    </div>
	  </div>
         <a href="cikis.php" style="color: #a10808; margin-left:20px; ">  Çıkış Yap</a>
		    <div id="login" style="margin-top: 30px"></div> 
    </div>
  </div>
	<!--#Login -->
		
	<div style="clear: both"></div>
	
		<!-- Avatar Show -->
	<!--#Avatar Show -->
		
  <div style="clear: both"></div>

	<!-- Footer -->
<div id="footer">
	<div class="copyright" style="cursor:pointer" onclick="as();">
	  <p>Tüm Hakları Saklıdır. ©
	  2013 -Ilgın Meslek Yüksekokulu Web Yönetimi</p>
	</div>
    
</div>
 <script>
  function as()
  {
$.msgBox({
	 buttons: [{ value: "Tamam" }],
     title:"HAKKIMIZDA",
    content:'Bu Proje <a  href="http://www.umitalbayrak.com/">ÜMİT ALBAYRAK</a> Danışmanlığında  <a  href="http://www.tanerozel.com/">TANER ÖZEL</a> Tarafında Tasarlanıp Ve Kodlanmıştır.',
    type:"info"
});
  }
	</script>
<!--#Footer -->	
</div>
<!--#Content -->

</body>
</html><?php 

}
else 
{
	
 //Log İÇin cookie
require_once("../log/geoip.inc");
require_once("../log/geoipregionvars.php");
require_once("../log/geoipcity.inc");
function getIp() {
$ipl = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ipl = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipl = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ipl;
}


//if kontrolü ile "ip" isimli text alanýnýna deðer verilip verilmediðini 
//ve ip adresinin doðru girilip girilmediðini RegularExpressin ile kontrol ediyoruz.

	//ip numarasýný al
	 $ip=getIp();
	//ülke ve bölge bilgisini içeren veri dosyasýný tanýmlý metot ile açýyoruz
	$gicountry = geoip_open("../log/data/GeoIP.dat",GEOIP_STANDARD);
	$gicity = geoip_open("../log/data/GeoIPCity.dat",GEOIP_STANDARD);
	$record = geoip_record_by_addr($gicity,$ip);

    $ulke=($record->country_name)."<br />";
    $sehir=($record->city)."<br />";
	 
	//girilen ip'ye göre bulunan ülke kodunu,ülke ismini ve ziyaretçi adresini ekrana bastýrýyoruz.
	if (geoip_country_code_by_addr($gicountry, $ip) )
	{
	
		//ip'ye kayýtlý ISP (internet servise provider) bilgisini içeren veri dosyasýný açýyoruz.
		$giisp = geoip_open("../log/data/GeoIPISP.dat",GEOIP_STANDARD);
		//ISP bilgilarini alýyoruz.
		if ($isp = geoip_org_by_addr($giisp,$ip))
			$saglayci= $isp;
		
	geoip_close($gicity);
	geoip_close($giisp);
	
	}
		
	geoip_close($gicountry);

  $log_adresi=$_SERVER['REQUEST_URI'];
   $log_tarih=strtr(date("d F Y l ,H:i"), $tarih);  



$ua=getBrowser();
$logtarayci=$ua['name'].$ua['version'];
$log_pl=$ua['platform'];



mysql_query("insert into  log (log_adresi,log_ip,log_sehir,log_ulke,log_saglayici,log_pl,log_taryaci,log_tarih) values('$log_adresi','$ip','$sehir','$ulke','$saglayci','$log_pl','$logtarayci','$log_tarih')");
	echo'<meta http-equiv="refresh" content="0;URL=index.php">';
 
}

	
	

?>