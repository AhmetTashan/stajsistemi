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

  <div id="o_pencer"> Staj Kayıt Onayı</div>
  <div class="CSSTableGenerator" >
<table>

  <tr >
       <td  >Sıra No </td>
       <td  >Öğrenci No</td>
       <td >Öğrenci TC No</td>
       <td  >Öğrenci Adı Soyadı</td>
       <td >Bölüm</td>
       <td >Sınıf</td>
       <td >Öğretim</td>
       <td width="14%" >İşlemler</td>
     </tr>
	 <?php 
	 $sayac=0;
	 if(mysql_num_rows($sorgu)!=0)
	 while($satir = mysql_fetch_array($sorgu))
     { $sayac=$sayac+1;?>
     <tr >
       <td ><?php echo $sayac;?></td>
       <td><?php echo $satir[1]; ?></td>
       <td><?php echo $satir[0]; ?></td>
       <td><?php echo $satir[2]; ?></td>
       <td><?php echo $satir[6]; ?></td>
       <td><?php echo $satir[8]; ?></td>
       <td><?php echo $satir[9]; ?></td>
       <td><div id="sil"><a href="onay.php?islem=o&o_tc=<?php echo $satir[0];?>&posta=<?php echo $satir[4];?>&ad=<?php echo $satir[2]; ?>"><img src="images/onay.png" alt="Onayla" width="25" /></a></div>
         <div id="guncelle"></div
       
      >
         <div id="sil"><a href="onay.php?islem=r&o_tc=<?php echo $satir[0];?>&posta=<?php echo $satir[4];?>&ad=<?php echo $satir[2]; ?>"><img src="images/sil.png" alt="Sil" width="25" /></a></div>
         <div id="guncelle"></div
       
      ></td>
     </tr>
	<?php 
	 }
   else
	{
		
     echo '<tr><p style="color:#e3dada; font-family: Arial, Helvetica, sans-serif;font-size:15px; margin-left:300px; ">Herhangi Öğrenci Kaydı Bulunmiyor</p> </br></tr>';
  
	}
	
	?>
	
 </table> 
 </div>
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