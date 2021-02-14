<?
session_start();
ob_start();
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
#bg{
	margin-left: auto;
	margin-top: auto;
	height: 290px;
	width: 570px;
	margin-right: auto;
	padding-top: 95px;
	background-image: url(images/msj.png);
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;
	color: #C00;
	}
a:link {
	text-decoration: underline;
}
a:visited {
	text-decoration: underline;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: underline;
}
body {
	background-color: #FFF;
	margin-top: 100px;
	background-image: url(images/bg.jpg);
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Çıkış</title>

</head>
<div id="bg">
				  		<?php
						session_start();
						$ogr_tc=0;$ogr_no=0;
						
	                  		$_SESSION['ogr_tc']=$ogr_tc;
	                    $_SESSION['ogr_no']=$ogr_no;
						
						
echo '<center><img src="images/cikis.png" width="64" height="64" /></center></br>';
	echo '<div style=" color:#8ccf27; font-size:18px;text-align:center;">Çıkış İşlemi Başarlı </div></br>';
	echo '<div style="color:#8ccf27; font-size:11px;text-align:center;">Yönlendirliyorsunuz... </div>';
	echo '<meta http-equiv="refresh" content="5;URL=index.php">';	
						?>
</div>
</body>
</html>
<?php 
ob_end_flush();  // header bitiş.
?>