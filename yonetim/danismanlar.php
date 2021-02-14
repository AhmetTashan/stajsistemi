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
	?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
  ?>
  
  
  <?php $sorgu=mysql_query("Select * From danisman");?>
  
  
 <div id="orta">
  <a href="islem.php?bil=d" class="btnd" style=" color:#333; margin-left:8px; padding-bottom:10px; padding-top:10px;  font-size:21px;"> Danışman Ekle  </a>
   <div class="CSSTableGenerator" >
   <table>
     <tr >
       <td>Sıra No </td>
       <td>Sicil No</td>
       <td>Danışman Adı Soyadı</td>
       <td >E-Posta</td>
       <td >İşlemler</td>
     </tr>
	 <?php 
	 $sayac=0;
	 if(mysql_num_rows($sorgu)!=0)
	 while($satir = mysql_fetch_array($sorgu))
     { $sayac=$sayac+1;?>
     <tr >
       <td><?php echo $sayac;?></td>
       <td><?php echo $satir[0]; ?></td>
       <td><?php echo $satir[1]; ?></td>
       <td><?php echo $satir[4]; ?></td>
       <td><div id="sil"><a href="vislem.php?bil=<?php echo $satir[0];?>"><img src="images/sil.png" alt="Sil" width="25" /></a></div>
         <div id="guncelle"></div
       
      >
         <div id="sil"><a href="islem.php?bil=g&d_s=<?php echo $satir[0];?>&d_a=<?php echo $satir[1];?>&d_si=<?php echo $satir[3];?>&d_ep=<?php echo $satir[4]; ?>"><img src="images/guncelle.png" alt="Güncelle" width="25" /></a></div>
         <div id="guncelle"></div
       
      ></td>
     </tr>
	<?php } 
	
	else 
	{
 echo '<tr>
 
    <td  width="300" align="center"></td>
	 <td  width="300" align="center"></p></td>
	  <td  width="300" align="center"><p style="color:#e3dada; font-size:20px; ">Herhangi Danışman Kaydı Bulunmiyor</p></td>
   </tr>'	;	
	}
	
	?>
   </table>
   </div>
 </div>

</div>
</body>
</html>
<?php 
}else 
{
	echo '<meta http-equiv="refresh" content="0;URL=index.php">';
}

?>