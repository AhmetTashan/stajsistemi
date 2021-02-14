
<?php

require_once("geoip.inc");
require_once("geoipregionvars.php");
require_once("geoipcity.inc");

//if kontrol� ile "ip" isimli text alan�n�na de�er verilip verilmedi�ini 
//ve ip adresinin do�ru girilip girilmedi�ini RegularExpressin ile kontrol ediyoruz.

	//ip numaras�n� al
	echo $ip=$_SERVER['REMOTE_HOST'];
	//�lke ve b�lge bilgisini i�eren veri dosyas�n� tan�ml� metot ile a��yoruz
	$gicountry = geoip_open("data/GeoIP.dat",GEOIP_STANDARD);
	$gicity = geoip_open("data/GeoIPCity.dat",GEOIP_STANDARD);
	$record = geoip_record_by_addr($gicity,$ip);

     echo 	"�lke".$ulke=($record->country_name)."<br />";
     echo   "Sehir".$sehir=($record->city)."<br />";
	 
	//girilen ip'ye g�re bulunan �lke kodunu,�lke ismini ve ziyaret�i adresini ekrana bast�r�yoruz.
	if (geoip_country_code_by_addr($gicountry, $ip) )
	{
	
		//ip'ye kay�tl� ISP (internet servise provider) bilgisini i�eren veri dosyas�n� a��yoruz.
		$giisp = geoip_open("data/GeoIPISP.dat",GEOIP_STANDARD);
		//ISP bilgilarini al�yoruz.
		if ($isp = geoip_org_by_addr($giisp,$ip))
			echo "Saglyaci =".$saglayci= $isp . "<br />";
		
	geoip_close($gicity);
	geoip_close($giisp);
	
	}
		
	geoip_close($gicountry);

   echo  "Olay Yolu=".$log_adresi=$_SERVER['SCRIPT_NAME']."<br />";
   echo  "Olay Tarihi=".strtr(date("d F Y l ,H:i"), $tarih)."<br />";  

// Browser Bilgisi Alma

 
//Tarayici bilgisi g�sterme


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

