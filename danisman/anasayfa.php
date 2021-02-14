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
<div id="bg"> 
  <?php 

  include('menu.php');
  include('bag.php');
  $dss=$_SESSION['dsifre']; 
  $dsk=$_SESSION['dkadi'];
        
  ?>
  
  
  <?php $sorgu=mysql_query("Select * From ogr Where onay='b' and ogr_danisman='$dsk'");?>
  
  
 <div id="orta">
 <meta http-equiv="refresh" content="0;URL=onaybekliyen.php">
   <table width="100%" border="0"   class="tablo">
   <tr>
  <td><p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  
  </tr>
	 
	
 </table> 
 
 </div>

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