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
  
  
  <?php $sorgu=mysql_query("Select * From log ORDER BY log_tarih DESC");?>
  
  
 <div id="orta">
  <div class="CSSTableGenerator" >
   <table height="3%">
     <tr >
       <td width="9%">Sıra No </td>
       <td width="9%">İp No</td>
       <td width="7%">Ülke</td>
       <td width="7%" >Şehir</td>
       <td width="16%" >İnternet Sağlayıcıs</td>
       <td width="8%" >Olay Adresi</td>
       <td width="8%" >Taraycı</td>
       <td width="10%" >Plartform</td>
       <td width="16%" >Olay Tarihi</td>
       <td width="10%" >İşlemler</td>
     </tr>
	 <?php 
	 if(isset($_GET['ip']))
	 {
		 
		 $ip=$_GET['ip'];
		 $durum=$_GET['d'];
		 
		 mysql_query("UPDATE  log SET log_ban='b' where log_ip='$ip'");
		 if($durum=='a')
		 {
			  mysql_query("UPDATE  log SET log_ban='a' where log_ip='$ip'");
			 
		
		 }
		  echo '<meta http-equiv="refresh" content="0;URL=log.php">';
	  }
	 
	 $sayac=0;
	 if(mysql_num_rows($sorgu)!=0)
	 while($satir = mysql_fetch_array($sorgu))
     { $sayac=$sayac+1;?>
     <tr >
       <td height="48"><?php echo $sayac;?></td>
       <td><?php echo $satir[2]; ?></td>
       <td><?php echo $satir[4]; ?></td>
       <td><?php echo $satir[3]; ?></td>
       <td><?php echo $satir[5]; ?></td>
       <td><?php echo $satir[1]; ?></td>
       <td><?php echo $satir[7]; ?></td>
       <td><?php echo $satir[6]; ?></td>
       <td><?php echo $satir[8]; ?></td>
       <td >
       <?php 
	   
	   if($satir[10]=="b")
	   {
	   echo '<a style="color:#03F" href="log.php?d=a&ip='.$satir[2].'">Banı Aç </a>';
       }
       else
       {
        echo '<a style="color:#03F" href="log.php?ip='.$satir[2].' ">Banı At </a>';
	   }
		?>
    
	  </td>
	 
     </tr>
	<?php 
	 } 
	
	else 
	{
 echo '<tr>
 
    <td  width="300" align="center"></td>
	 <td  width="300" align="center"></p></td>
	  <td  width="300" align="center"><p style="color:#e3dada; font-size:20px; ">Log kaydı bulunmiyor</p></td>
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