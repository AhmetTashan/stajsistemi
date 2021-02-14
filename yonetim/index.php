<?php
include('bag.php');
ob_start();
session_start();
 $sk=$_SESSION['kadi'];
 $ss=$_SESSION['sifre'];
$dent=mysql_query( "select * from yonetim where k_adi='$sk' and k_sifre='$ss'");
$kontrol=mysql_num_rows($dent);

if($kontrol==1)
{
	echo '<meta http-equiv="refresh" content="0;URL=anasayfa.php">';
	
 }
	
	else
	{
	?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Giriş</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body>
        <div class="container">
		
			
			<header>
            
			<div id="ust"></div>
				<h1>STAJ BİLGİ SİSTEMİ YÖNETİM PANELİ</h1>
		  <h2> </h2>			
			<section class="main">
				<form class="form-1" action="kontrol.php" method="post" name="form1" >
					<p class="field">
						<input type="text" name="kullanci" placeholder="Kullancı Adi" id="kullanci">
						<i class="icon-user icon-large"></i>
					</p>
						<p class="field"><input type="password" name="sifre" placeholder="Şifre" id="sifre">
							<i class="icon-lock icon-large"></i>
					</p>
					<p class="submit">
						<button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
					</p>
				</form>
			</section>
        </div>
    </body>
</html><?php 
}
?>