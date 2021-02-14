<?php
  ob_start();
  session_start();
 $dsk=$_SESSION['dkadi'];
 $dss=$_SESSION['dsifre'];
 include('bag.php');
$dent=mysql_query( "select * from danisman where  dsicil_no='$dsk' and d_sifre='$dss'");
$kontrol=mysql_num_rows($dent);


if($kontrol==1)
{
	
	 
 
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<title>Yönetim Paneli</title>
 <link rel="stylesheet" type="text/css" href="css/stil.css" />
 <style type="text/css">
 a:link {
	text-decoration: none;
	color: #FFFFFF;
}
a:visited {
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: none;
	color: #FFFFFF;
}
a:active {
	text-decoration: none;
}
 </style>
</head>

<body>
<script>

</script>
<div id="bg"> 
  <?php 

  include('menu.php');
  include('bag.php');
  $dss=$_SESSION['dsifre']; 
  $dsk=$_SESSION['dkadi'];
        
  ?>
  
  
 
 <div id="orta">

  <div id="o_pencer">  </div>
  <div id="o_pencer"> Toplu Mesaj Gönderimi </div>
  <div class="CSSTableGenerator" >
<table>

  <tr >
    <td width="8%" >Sınıf</td>
    <td width="68%" >Mesajınız</td>
    <td width="14%" >İşlemler</td>
  </tr>
	
     <tr >
       <td height="106">1-A</td>
       <form action="toplumsj.php" method="post">
         <td><textarea name="msj" cols="100" rows="5" id="msj"></textarea>
           <input name="sinif" type="hidden" value="1-A" /></td>
         <td><input class="btnd" type="submit" name="button2" id="button2" value="Mesajı Yolla" /></td>
         </form>
     </tr>
     <tr >
       <td height="106">1-B</td>
       <form action="toplumsj.php" method="post">
         <td><textarea name="msj" cols="100" rows="5" id="msj2"></textarea>
           <input name="sinif" type="hidden" value="1-B" /></td>
         <td><input class="btnd" type="submit" name="button2" id="button3" value="Mesajı Yolla" /></td>
         </form>
     </tr>
     <tr >
       <td height="106">2-A</td>
       <form action="toplumsj.php" method="post">
         <td><textarea name="msj" cols="100" rows="5" id="msj"></textarea>
           <input name="sinif" type="hidden" value="2-A" /></td>
         <td><input class="btnd" type="submit" name="button2" id="button4" value="Mesajı Yolla" /></td>
         </form>
     </tr>
     <tr >
       <td height="106">2-B</td>
       <form action="toplumsj.php" method="post">
         <td><textarea name="msj" cols="100" rows="5" id="msj4"></textarea>
           <input name="sinif" type="hidden" value="2-B" /></td>
         <td><input class="btnd" type="submit" name="button2" id="button5" value="Mesajı Yolla" /></td>
         </form>
     </tr>
	
	
 </table> 
 </div>
 </div>
 <?php 
  
  if($_POST['sinif'])
  {
        $sorgu=mysql_query("Select * From ogr");
	     echo $mesaj=$_POST['msj'];
	     echo $sinif=$_POST['sinif'];
		   $mailtanim = "MIME-Version: 1.0\r\n"; // bu kısım tanımlama kısmı
           $mailtanim .= "Content-type: text/plain; charset=utf-8\r\n";
           $mailtanim .= "From: $gonder_isim <$gonder_mail>\r\n";
           $mailtanim .= "Reply-To: $gonder_isim <$gonder_mail>\r\n";
    
     while($satir = mysql_fetch_array($sorgu))
      {        	 	   
	    $gonder_isim="S.Ü. Ilgın Meslek Yüksekokulu Staj Bilgi Sistemi";
        $gonder_mail=$satir[4];
        $alan_isim=$dan_adi;
        $alan_mail=$satir[4];
        $baslik="Staj Bilgi Sistemi";
        $mesaj=$mesaj; 
       
        #--------------------------------------------------------------Mail Kontrol -----------------------------------
       mail($alan_mail,$baslik,stripslashes($mesaj),$mailtanim);
              
	 }
	echo'<meta http-equiv="refresh" content="0;URL=index.php">';

  }
	?>
</div>
</body>
</html>
<?php 
}
else 
{
	echo'<meta http-equiv="refresh" content="0;URL=index.php">';
}
?>