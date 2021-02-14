
<?php

require_once("geoip.inc");
require_once("geoipregionvars.php");
require_once("geoipcity.inc");

//if kontrolü ile "ip" isimli text alanýnýna deðer verilip verilmediðini 
//ve ip adresinin doðru girilip girilmediðini RegularExpressin ile kontrol ediyoruz.

	//ip numarasýný al
	echo $ip=$_SERVER['REMOTE_HOST'];
	//ülke ve bölge bilgisini içeren veri dosyasýný tanýmlý metot ile açýyoruz
	$gicountry = geoip_open("data/GeoIP.dat",GEOIP_STANDARD);
	$gicity = geoip_open("data/GeoIPCity.dat",GEOIP_STANDARD);
	$record = geoip_record_by_addr($gicity,$ip);

     echo 	"Ülke".$ulke=($record->country_name)."<br />";
     echo   "Sehir".$sehir=($record->city)."<br />";
	 
	//girilen ip'ye göre bulunan ülke kodunu,ülke ismini ve ziyaretçi adresini ekrana bastýrýyoruz.
	if (geoip_country_code_by_addr($gicountry, $ip) )
	{
	
		//ip'ye kayýtlý ISP (internet servise provider) bilgisini içeren veri dosyasýný açýyoruz.
		$giisp = geoip_open("data/GeoIPISP.dat",GEOIP_STANDARD);
		//ISP bilgilarini alýyoruz.
		if ($isp = geoip_org_by_addr($giisp,$ip))
			echo "Saglyaci =".$saglayci= $isp . "<br />";
		
	geoip_close($gicity);
	geoip_close($giisp);
	
	}
		
	geoip_close($gicountry);

   echo  "Olay Yolu=".$log_adresi=$_SERVER['SCRIPT_NAME']."<br />";
   echo  "Olay Tarihi=".strtr(date("d F Y l ,H:i"), $tarih)."<br />";  

// Browser Bilgisi Alma

 
//Tarayici bilgisi gösterme


$ua=getBrowser();
echo 
 "Tarayci Adi". $ua['name']."<br />".
 "Tarayci Versiyonu ".$ua['version']."<br />".
 "Isletim Sistemi=" .$ua['platform']."<br />";
 
 include("bagl.php");
 mysql_query("insert into  log (log_adresi,log_ip,log_sehir,log_ulke,log_saglayici) values('$log_adresi','$ip','$sehir','$ulke','$saglayci')");


function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}
 
 echo "Orjinal Ip".getIp();

?>

