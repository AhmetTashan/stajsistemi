<?php
function olustur ()
{
	$sifre = substr(md5(rand(0,999999999999)),-6);
	if ($sifre)
	{
		session_start();
		$_SESSION["koruma"] = $sifre;

		$width 	= 99;
		$height	= 34;
		$resim	= @imagecreate ($width,$height);
		$siyah  	= ImageColorAllocate($resim, 0, 0, 0);
		$kirmizi  	= ImageColorAllocate($resim, 0, 36, 99);
		$beyaz   	= ImageColorAllocate($resim, 255, 255, 255);
		ImageFill($resim, 0, 0, $beyaz);

		$font = 'font/arial.ttf';

		imagettftext($resim, 20, 10, 10, 28, $siyah, $font, $sifre[0]);
		imagettftext($resim, 20, 0, 25, 28, $kirmizi, $font, $sifre[1]);
		imagettftext($resim, 20, -10, 40, 28, $siyah, $font, $sifre[2]);
		imagettftext($resim, 20, 0, 55, 28, $kirmizi, $font, $sifre[3]);
		imagettftext($resim, 20, 0, 70, 28, $siyah, $font, $sifre[4]);
		imagettftext($resim, 20, 5, 80, 24, $siyah, $font, $sifre[5]);
		


		header("Content-type: image/png");
		ImagePng($resim);
		ImageDestroy($resim);
	}
}
olustur(); 
?>