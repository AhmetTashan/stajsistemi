<?
session_start();
ob_start();
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Staj Bilgileri Kayıt Sistemi</title>
<link href="font.css" rel="stylesheet" type="text/css" />
</head>

				  		<?
	                  		$_SESSION =  $_SESSION['kadi'];
							session_destroy();
							$_SESSION['sifre']=$sifre;
							session_destroy();
						
							echo $sk=$_SESSION['kadi'];
echo $ss=$_SESSION['sifre'];
echo '<meta http-equiv="refresh" content="0;URL=../ogrenci/index.php">';	
						?>

</body>
</html>
<?
ob_end_flush();  // header bitiş.
?>